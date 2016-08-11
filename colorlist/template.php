<ul class="input-list field-grid color-list-field cf">
<?php foreach($field->options() as $key => $value): ?>
<li><label><input type="radio" name="color" value="<?php echo $value ?>" <?php e($field->value() == $value, 'checked') ?>/><span style="background: <?php echo $value ?>"></label></li>
<?php endforeach ?>
</ul>
