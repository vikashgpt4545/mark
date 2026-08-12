<?php
/**
 * Dynamic XML Sitemap Generator
 */
define('FINWISE_APP', true);
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/functions.php';

header('Content-Type: application/xml; charset=utf-8');

$pages = finwise_get_all_pages();
$base_url = SITE_URL;

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

foreach ($pages as $page) {
    $loc = rtrim($base_url, '/') . '/' . ltrim($page['url'], '/');
    $priority = ($page['url'] === 'index.php') ? '1.0' : (strpos($page['url'], 'index.php') !== false ? '0.9' : '0.8');
    $changefreq = 'weekly';
    $lastmod = date('Y-m-d');

    echo '  <url>' . "\n";
    echo '    <loc>' . htmlspecialchars($loc) . '</loc>' . "\n";
    echo '    <lastmod>' . $lastmod . '</lastmod>' . "\n";
    echo '    <changefreq>' . $changefreq . '</changefreq>' . "\n";
    echo '    <priority>' . $priority . '</priority>' . "\n";
    echo '  </url>' . "\n";
}

echo '</urlset>';
