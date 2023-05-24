<?php if ($field->kind() == "single") : ?>
    <?php $image = $field->img(); ?>
    <?php snippet("media/media", ["field" => $image]) ?>
<?php elseif ($field->kind() == "video") : ?>
    <?php if ($field->video()->isNotEmpty()) : ?>
        <figure class="aspectholder">
            <video playsinline <?php if ($field->controls()->toBool()) : ?>controls preload<?php else : ?>autoplay loop muted class="lazy" <?php endif ?> data-src="<?= $field->video()->html() ?>">
                <source type="video/mp4" data-src="<?= $field->video()->html() ?>">
            </video>
        </figure>
    <?php endif ?>
<?php endif ?>