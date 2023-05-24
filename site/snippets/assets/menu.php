<?php if ($field->menu()->isNotEmpty()) : ?>
    <nav aria-label="Menu">
        <?php foreach ($field->menu()->toStructure() as $p) : ?>
            <<?php if ($p->menuSource() == "blank") : ?>p<?php else : ?>a href="<?php if ($p->menuSource() == "external") : ?><?= $p->menuLink() ?><?php elseif ($p->menuSource() == "internal") : ?><?= $p->menuPage()->toPage()->url() ?><?php endif ?>" aria-label="<?= $p->menuName() ?>" <?php if ($p->menuSource() == "external") : ?>rel="noopener noreferrer" target="_blank" <?php endif ?><?php endif ?>>
                <?= $p->menuName()->kti() ?>
            </<?php if ($p->menuSource() == "blank") : ?>p<?php else : ?>a<?php endif ?>>
        <?php endforeach ?>
    </nav>
<?php endif ?>