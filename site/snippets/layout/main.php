<?= snippet("head") ?>

    <?php foreach ($page->pagebuilder()->toBlocks() as $block) : ?>
        <?php snippet("blocks/" . $block->type(), ["block" => $block]) ?>
    <?php endforeach ?>

<?= snippet("layout/footer") ?>