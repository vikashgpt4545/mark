<?php
/**
 * FinWise - SEO & Schema Structured Data Generator
 * Dynamic meta tags, Open Graph, Twitter Cards, Canonical URLs, and JSON-LD Schema.
 */

if (!defined('FINWISE_APP')) {
    require_once __DIR__ . '/../config/config.php';
}

class SEO {
    public static function render(array $meta = []): void {
        $prefix = get_root_prefix();
        
        // Defaults
        $title = !empty($meta['title']) ? $meta['title'] . ' | ' . SITE_NAME : SITE_NAME . ' - ' . SITE_TAGLINE;
        $description = !empty($meta['description']) ? $meta['description'] : SITE_DESCRIPTION;
        
        // Canonical URL detection
        $script = $_SERVER['SCRIPT_NAME'] ?? '';
        $clean_path = ltrim(str_replace('\\', '/', $script), '/');
        if (basename($clean_path) === 'index.php') {
            $dir = dirname($clean_path);
            $clean_path = ($dir === '.' || $dir === '/' || $dir === '') ? '' : rtrim($dir, '/') . '/';
        }
        $canonical = SITE_URL . $clean_path;
        
        // Image
        $og_image = !empty($meta['og_image']) ? $meta['og_image'] : SITE_URL . 'assets/images/finwise-og.png';
        $type = !empty($meta['type']) ? $meta['type'] : 'website';

        echo "<!-- Primary Meta Tags -->\n";
        echo "<title>" . e($title) . "</title>\n";
        echo '<meta name="description" content="' . e($description) . "\">\n";
        echo '<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">' . "\n";
        echo '<link rel="canonical" href="' . e($canonical) . "\">\n";
        
        echo "\n<!-- Open Graph / Facebook -->\n";
        echo '<meta property="og:type" content="' . e($type) . "\">\n";
        echo '<meta property="og:url" content="' . e($canonical) . "\">\n";
        echo '<meta property="og:title" content="' . e($title) . "\">\n";
        echo '<meta property="og:description" content="' . e($description) . "\">\n";
        echo '<meta property="og:image" content="' . e($og_image) . "\">\n";
        echo '<meta property="og:site_name" content="' . e(SITE_NAME) . "\">\n";

        echo "\n<!-- Twitter / X -->\n";
        echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
        echo '<meta name="twitter:url" content="' . e($canonical) . "\">\n";
        echo '<meta name="twitter:title" content="' . e($title) . "\">\n";
        echo '<meta name="twitter:description" content="' . e($description) . "\">\n";
        echo '<meta name="twitter:image" content="' . e($og_image) . "\">\n";

        // Structured Data Schema JSON-LD
        self::renderSchema($meta, $canonical);
    }

    private static function renderSchema(array $meta, string $canonical): void {
        echo "\n<!-- Structured Data Schema -->\n";
        
        // Organization Schema
        $orgSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            'name' => SITE_NAME,
            'url' => SITE_URL,
            'logo' => SITE_URL . 'assets/images/logo.png',
            'description' => SITE_DESCRIPTION
        ];
        echo '<script type="application/ld+json">' . json_encode($orgSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . "</script>\n";

        // WebSite Schema
        $websiteSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'WebSite',
            'name' => SITE_NAME,
            'url' => SITE_URL,
            'potentialAction' => [
                '@type' => 'SearchAction',
                'target' => SITE_URL . 'search.php?q={search_term_string}',
                'query-input' => 'required name=search_term_string'
            ]
        ];
        echo '<script type="application/ld+json">' . json_encode($websiteSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . "</script>\n";

        // Breadcrumb Schema if breadcrumbs provided
        if (!empty($meta['breadcrumbs']) && is_array($meta['breadcrumbs'])) {
            $listItems = [];
            $pos = 1;
            foreach ($meta['breadcrumbs'] as $name => $link) {
                $listItems[] = [
                    '@type' => 'ListItem',
                    'position' => $pos++,
                    'name' => $name,
                    'item' => (strpos($link, 'http') === 0) ? $link : SITE_URL . ltrim($link, '/')
                ];
            }
            $breadcrumbSchema = [
                '@context' => 'https://schema.org',
                '@type' => 'BreadcrumbList',
                'itemListElement' => $listItems
            ];
            echo '<script type="application/ld+json">' . json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . "</script>\n";
        }

        // FAQ Schema if faqs provided
        if (!empty($meta['faqs']) && is_array($meta['faqs'])) {
            $mainEntity = [];
            foreach ($meta['faqs'] as $faq) {
                if (!empty($faq['q']) && !empty($faq['a'])) {
                    $mainEntity[] = [
                        '@type' => 'Question',
                        'name' => $faq['q'],
                        'acceptedAnswer' => [
                            '@type' => 'Answer',
                            'text' => $faq['a']
                        ]
                    ];
                }
            }
            if (!empty($mainEntity)) {
                $faqSchema = [
                    '@context' => 'https://schema.org',
                    '@type' => 'FAQPage',
                    'mainEntity' => $mainEntity
                ];
                echo '<script type="application/ld+json">' . json_encode($faqSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . "</script>\n";
            }
        }
    }
}
