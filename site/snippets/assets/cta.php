<?php if ($field->ctaText()->isNotEmpty()) : ?>
    <a href="<?= $field->ctalink()->url() ?>" <?php if ($field->ctaTarget()->toBool()) : ?>target="_blank" rel="noopener noreferrer"<?php endif ?> aria-label="<?= $field->ctaText() ?>">
        <?= $field->ctaText()->kti() ?>
    </a>
<?php endif ?>