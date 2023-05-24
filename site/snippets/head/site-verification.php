<?php if ($site->googleVerifyID()->isNotEmpty()) : ?>
  <!-- Google Site Verification -->
  <?php $code = $site->googleVerifyID()->html() ?>
  <meta name="google-site-verification" content="<?= $code ?>" />
<?php endif ?>

<?php if ($page->isHomepage() && $site->fbVerifyID()->isNotEmpty()) : ?>
  <!-- Facebook Verification -->
  <meta name="facebook-domain-verification" content="<?= $site->fbVerifyID()->html() ?>" />
<?php endif ?>