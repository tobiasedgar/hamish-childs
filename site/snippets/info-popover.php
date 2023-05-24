
<div class="first"></div>
<div class="info grid-8">


    <div class="info-about">
        <span>About</span>
        <p><?= $site->about() ?></p>
    </div>
    <div class="info-ex">
        <span>Experience</span>
        <ul>
            <?php foreach ($site->ex()->toStructure() as $item) : ?>
                <li>
                    <?php if ($item->link()->isNotEmpty()) : ?>
                        <a href="<?= $item->link() ?>" aria-label="<?= $item->where() ?>" class="" target="_blank" rel="noopener"><?= $item->where() ?></a>
                    <?php else : ?>
                        <h6><?= $item->where() ?></h6>
                    <?php endif ?>
                    <p class="role"><?= $item->role() ?></p>
                    <p class="role"><?= $item->time() ?></p>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
    <div class="info-links">
    <span>@</span>
        <ul>
            <?php foreach ($site->links()->toStructure() as $item) : ?>
                <li>
                    <a href="<?= $item->link() ?>" aria-label="<?= $item->text() ?>" class="" target="_blank" rel="noopener"><?= $item->text() ?></a>
                </li>
            <?php endforeach ?>
        </ul>
    </div>

    <div class="copyright">©</div>
</div>