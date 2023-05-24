<?php if ($site->googleAnalyticsID()->isNotEmpty()) : ?>
  <!-- Google Analytics -->
  <?php $gaID = $site->googleAnalyticsID()->html() ?>
  <script async src="https://www.googletagmanager.com/gtag/js?id=<?= $gaID ?>"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', '<?= $gaID ?>');
  </script>
<?php endif ?>

<?php if ($site->tagManagerID()->isNotEmpty()) : ?>
  <!-- Google Tag Manager -->
  <?php $tmID = $site->tagManagerID()->html() ?>
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', '<?= $tmID ?>');
  </script>
  <!-- End Google Tag Manager -->
<?php endif ?>