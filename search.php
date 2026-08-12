<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/functions.php';
require_once __DIR__ . '/includes/seo.php';

$query = isset($_GET['q']) ? trim($_GET['q']) : '';
$results = [];

if ($query !== '') {
    $results = finwise_search_pages($query);
}

$page_seo = [
    'title' => !empty($query) ? 'Search Results for "' . e($query) . '" - FinWise' : 'Search Financial Guides & Calculators - FinWise',
    'description' => 'Search through FinWise personal finance guides, loan calculators, credit card reviews, and insurance resources.',
    'breadcrumbs' => ['Home' => 'index.php', 'Search' => 'search.php']
];

include __DIR__ . '/components/header.php';
?>

<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/components/breadcrumbs.php'; ?>
        <h1>Search Results</h1>
        <p><?php echo !empty($query) ? 'Displaying results for: <strong>"' . e($query) . '"</strong>' : 'Search our financial knowledge base and calculators.'; ?></p>
    </div>
</div>

<section class="section">
    <div class="container">
        <div style="max-width: 700px; margin: 0 auto 2.5rem auto;">
            <form action="search.php" method="GET" class="search-form" style="display:flex; gap:0.5rem;">
                <input type="text" name="q" value="<?php echo e($query); ?>" placeholder="e.g. Loan EMI, Compound Interest, Credit Score, Insurance..." required style="flex:1; padding:0.75rem 1rem; border:1px solid var(--clr-border); border-radius:var(--radius-sm); font-size:1rem;">
                <button type="submit" class="btn btn-emerald">Search</button>
            </form>
        </div>

        <?php if (!empty($query)): ?>
            <?php if (count($results) > 0): ?>
                <p style="margin-bottom:1.5rem; color:var(--clr-text-muted);">Found <strong><?php echo count($results); ?></strong> relevant resource(s):</p>
                <div style="display:flex; flex-direction:column; gap:1.25rem;">
                    <?php foreach ($results as $res): ?>
                        <div class="article-card" style="padding:1.5rem; background:#fff;">
                            <span class="badge badge-emerald" style="display:inline-block; margin-bottom:0.5rem;"><?php echo e($res['category']); ?></span>
                            <h3 style="font-size:1.2rem; margin-bottom:0.4rem;"><a href="<?php echo e(url($res['url'])); ?>"><?php echo e($res['title']); ?></a></h3>
                            <p style="font-size:0.9rem; color:var(--clr-text-muted); margin-bottom:0.75rem;"><?php echo e($res['description']); ?></p>
                            <a href="<?php echo e(url($res['url'])); ?>" style="font-weight:600; font-size:0.875rem; color:var(--clr-primary-light);">Access Resource →</a>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <div class="callout-box" style="text-align:center; padding:3rem 1.5rem;">
                    <h3>No exact matches found for "<?php echo e($query); ?>"</h3>
                    <p>Try searching for broader terms such as "loan", "savings", "credit score", or "insurance".</p>
                    <div style="margin-top:1.5rem;">
                        <a href="<?php echo url('calculators/index.php'); ?>" class="btn btn-primary">Browse Calculators</a>
                        <a href="<?php echo url('articles/index.php'); ?>" class="btn btn-outline" style="margin-left:0.5rem;">Explore Guides</a>
                    </div>
                </div>
            <?php endif; ?>
        <?php else: ?>
            <div style="text-align:center; padding:2rem 0;">
                <p>Type a topic above to search all articles, tools, and comparisons.</p>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php include __DIR__ . '/components/footer.php'; ?>
