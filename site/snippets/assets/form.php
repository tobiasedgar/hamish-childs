<?php if ($site->form()->isNotEmpty()) : ?>
    <?php if ($site->botpoison()->isNotEmpty()) : ?>
        <script src="https://unpkg.com/@botpoison/browser" async></script>
    <?php endif ?>

    <form action="<?= $site->endpoint() ?>" method="POST" <?php if ($site->botpoison()->isNotEmpty()) : ?>data-botpoison-public-key="<?= $site->botpoison() ?>" <?php endif ?>>
        <?php foreach ($site->form()->toStructure() as $f) : ?>
            <?php snippet("assets/form-field", ["field" => $f]) ?>
        <?php endforeach ?>

        <button aria-label="Submit Form">Submit</button>
    </form>
<?php endif ?>