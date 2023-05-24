<!-- Site Theme Colours -->
<style>
    :root {
        --fg: <?php if ($page->fg()->isNotEmpty()) : ?><?= $page->fg() ?><?php else : ?><?= $site->fg() ?><?php endif ?>;
        --bg: <?php if ($page->bg()->isNotEmpty()) : ?><?= $page->bg() ?><?php else : ?><?= $site->bg() ?><?php endif ?>;
    }
</style>