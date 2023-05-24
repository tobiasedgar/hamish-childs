<?php if ($site->tagManagerID()->isNotEmpty()) : ?>
    <?php $tmID = $site->tagManagerID()->html() ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?= $tmID ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
<?php endif ?>