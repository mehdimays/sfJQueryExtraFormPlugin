<?php include_stylesheets_for_form($form); ?>
<?php echo $form->renderFormTag(url_for('sfJQueryExtraFormDemo/html5')); ?>
  <fieldset>
    <legend>New attributes</legend>
    <table>
      <?php echo $form['input-placeholder']->renderRow() ?>
      <?php echo $form['textarea-placeholder']->renderRow() ?>
      <?php echo $form['autofocus']->renderRow() ?>
      <?php echo $form['required']->renderRow() ?>
    </table>
  </fieldset>
  <fieldset>
    <legend>Input types</legend>
    <table>
      <?php echo $form['type-email']->renderRow() ?>
      <?php echo $form['type-url']->renderRow() ?>
      <?php echo $form['type-number']->renderRow() ?>
      <?php echo $form['type-range']->renderRow() ?>
      <?php echo $form['type-range2']->renderRow() ?>
      <?php echo $form['type-search']->renderRow() ?>
      <?php echo $form['type-color']->renderRow() ?>
      <?php echo $form['type-date']->renderRow() ?>
      <?php echo $form['type-month']->renderRow() ?>
      <?php echo $form['type-week']->renderRow() ?>
      <?php echo $form['type-time']->renderRow() ?>
      <?php echo $form['type-datetime']->renderRow() ?>
      <?php echo $form['type-datetime-local']->renderRow() ?>
    </table>
  </fieldset>
  <fieldset>
    <legend>Min / Max Validation</legend>
    <table>
      <?php echo $form['min-max-number']->renderRow() ?>
      <?php echo $form['min-max-date']->renderRow() ?>
      <?php echo $form['min-max-color']->renderRow() ?>
      <?php echo $form['min-max-range']->renderRow() ?>
    </table>
  </fieldset>
  <br />
  <input type="submit" />
</form>
<?php include_javascripts_for_form($form); ?>