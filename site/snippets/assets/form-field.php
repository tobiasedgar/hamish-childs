<div>
    <?php if ($field->formLabel()->isNotEmpty()) : ?>
        <label for="<?= $field->formName() ?>"><?= $field->formLabel() ?></label>
    <?php endif ?>
    <?php if ($field->formType() == "text") : ?>
        <input name="<?= $field->formName() ?>" type="text" <?php if ($field->formPlaceholder()->isNotEmpty()) : ?>placeholder="<?= $field->formPlaceholder() ?>" <?php endif ?> aria-label="<?= $field->formName() ?>" required />
    <?php elseif ($field->formType() == "textArea") : ?>
        <textarea rows="3" name="<?= $field->formName() ?>" <?php if ($field->formPlaceholder()->isNotEmpty()) : ?>placeholder="<?= $field->formPlaceholder() ?>" <?php endif ?> aria-label="<?= $field->formName() ?>" required></textarea>
    <?php elseif ($field->formType() == "email") : ?>
        <input name="<?= $field->formName() ?>" type="email" <?php if ($field->formPlaceholder()->isNotEmpty()) : ?>placeholder="<?= $field->formPlaceholder() ?>" <?php endif ?> aria-label="<?= $field->formName() ?>" required />
    <?php elseif ($field->formType() == "dropdown") : ?>
        <select name="<?= $field->formName() ?>" aria-label="<?= $field->formName() ?>" required>
            <?php if ($field->formPlaceholder()->isNotEmpty()) : ?>
                <option disabled selected value><?= $field->formPlaceholder() ?></option>
            <?php endif ?>
            <?php foreach ($field->formDropdown()->toStructure() as $o) : ?>
                <option value="<?= $o->formOption() ?>" aria-label="<?= $o->formOption() ?>"><?= $o->formOption()->kti() ?></option>
            <?php endforeach ?>
        </select>
    <?php endif ?>
</div>