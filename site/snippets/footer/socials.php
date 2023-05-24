<?php if ($site->email()->isNotEmpty() || $site->telephone()->isNotEmpty() || $site->fb()->isNotEmpty() || $site->ig()->isNotEmpty()) : ?>
    <nav aria-label="Socials Navigation">
        <?php if ($site->email()->isNotEmpty()) : ?>
            <a href="mailto:<?= $site->email() ?>" aria-label="Site Email">Email</a>
        <?php endif ?>
        <?php if ($site->phone()->isNotEmpty()) : ?>
            <a href="tel:<?= $site->phone() ?>" aria-label="Site Phone">Phone</a>
        <?php endif ?>
        <?php if ($site->fb()->isNotEmpty()) : ?>
            <a href="https://facebook.com/<?= $site->fb() ?>" target="_blank" rel="noopener noreferrer" aria-label="Facebook">Facebook</a>
        <?php endif ?>
        <?php if ($site->ig()->isNotEmpty()) : ?>
            <a href="https://instagram.com/<?= $site->ig() ?>" target="_blank" rel="noopener noreferrer" aria-label="Instagram">Instagram</a>
        <?php endif ?>
    </nav>
<?php endif ?>