<ul class="input-list field-grid color-list-field cf">
<?php foreach($field->options() as $key => $value): ?>
<li><label><input type="radio" name="color" value="<?= $value ?>" <?php e($field->value() == $value, 'checked') ?>/><span style="background: <?= $value ?>"></label></li>
<?php endforeach ?>
</ul>