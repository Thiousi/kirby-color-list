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

<?php if($field->unset()):?>
<script type="text/javascript">
  var allRadios = document.getElementsByName('<?php echo $field->name(); ?>');
  var booRadio;
  var x = 0;
  for(x = 0; x < allRadios.length; x++){

    allRadios[x].onclick = function() {
      if(booRadio == this){
          this.checked = false;
          booRadio = null;
        }else{
          booRadio = this;
        }
    };
  }
</script>
<?php endif ?>