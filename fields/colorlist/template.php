<ul class="input-list field-grid color-list-field cf">
<?php foreach($field->options() as $key => $value): ?>
<li>
  <label>
  <input type="radio" name="<?php echo $field->name() ?>" value="<?php echo $value ?>" <?php  e($field->readonly, 'disabled="true"'); e($field->value() == $value | $field->default() == $value, 'checked')  ?>/>
    <span style="background: <?php echo $value ?>">
  </label>
</li>
<?php endforeach ?>
</ul>