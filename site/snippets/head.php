<!DOCTYPE html>
<html lang="en">

<!-- ** Developed by Tobias Edgar ** -->

<head>
  <?php snippet("head/title") ?>
  <?php snippet("head/meta") ?>
  <?php snippet("head/favicon") ?>

  <?php snippet("head/site-verification") ?>
  <?php snippet("head/analytics") ?>
  <?php snippet("head/fb-pixel") ?>
  <?php snippet("head/code-inject") ?>

  <?php snippet("head/css") ?>
  <?php snippet("head/theme-colours") ?>
</head>

<body data-template="<?= $page->template() ?>">
  <?php snippet("head/tag-manager") ?>

  <div class="page-content">
    <?= snippet("layout/header") ?>

    <main>
