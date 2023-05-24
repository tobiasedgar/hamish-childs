<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:type" content="website" />
<meta property="og:site_name" content="<?= $site->title() ?>">
<meta property="og:url" content="<?= html($page->url()) ?>" />
<link rel="canonical" href="<?= html($page->url()) ?>">
<meta name="keywords" content="<?= $site->keywords()->html() ?>">
<meta name="robots" content="index,follow" />
<?php if ($page->metaDescription()->isNotEmpty()) : ?>
    <meta name="description" content="<?= $page->metaDescription(300) ?>">
    <meta property="og:description" content="<?= $page->metaDescription(300) ?>" />
<?php else : ?>
    <meta name="description" content="<?= $site->metaDescription(300) ?>">
    <meta property="og:description" content="<?= $site->metaDescription(300) ?>">
<?php endif ?>
<?php if ($site->ogImage()->isNotEmpty() && $ogImage = $site->ogImage()->toFile()) : ?>
    <?php $ogImage = $ogImage->resize(1200) ?>
    <meta property="og:image" content="<?= $ogImage->url() ?>" />
    <meta property="og:image:width" content="<?= $ogImage->width() ?>" />
    <meta property="og:image:height" content="<?= $ogImage->height() ?>" />
<?php endif ?>
