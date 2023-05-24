<header class="grid-8">
    <?php if ($page->isHomePage()) : ?>
        <h1 class="visually-hidden"><?= $site->title() ?></h1>
    <?php else : ?>
        <h1 class="visually-hidden"><?= $page->title() ?></h1>
    <?php endif ?>

    <button clas="title" onclick="titleClick()">
        <?= $site->title() ?>
    </button>

    <button class="design-btn hb"  onclick="designClick()" aria-label="Scroll To Design">Design</button>
    <button class="info-btn hb" onclick="infoplay(this)" aria-label="Information Popover">Information</button>

    <a class="contact-btn hb" href="hello@hi.com" aria-label="Contact mailto:" target="_blank" rel="noopener">Contact</a>
</header>