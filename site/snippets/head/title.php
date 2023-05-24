<?php if ($page->metaHeading()->isNotEmpty()) : ?>
    <?php $pageTitle = $page->metaHeading() ?>
<?php else : ?>
    <?php if ($page->isHomepage()) : ?>
        <?php $pageTitle = $site->title()->html() ?>
    <?php else : ?>
        <?php $pageTitle = $site->title()->html() . " - " .  $page->title() ?>
    <?php endif ?>
<?php endif ?>
<title><?= $pageTitle ?></title>
<meta property="og:title" content="<?= $pageTitle ?>" />