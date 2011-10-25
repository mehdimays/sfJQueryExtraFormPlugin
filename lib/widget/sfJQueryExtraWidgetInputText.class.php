<?php

class sfJQueryExtraWidgetInputText extends sfWidgetFormInputText
{
  protected function configure($options = array(), $attributes = array())
  {
    parent::configure($options, $attributes);
    $this->addOption('source', array());
  }

  public function render($name, $value = null, $attributes = array(), $errors = array())
  {
    $attributes = array_merge(array(
      'data-sfautocomplete' => json_encode(array(
        'source' => $this->getOption('source')
      ))
    ), $attributes);
    
    return parent::render($name, $value, $attributes, $errors);
  }
  
  public function getJavascripts()
  {
    return array_merge(array(
      '/sfJQueryExtraFormPlugin/js/bootstrap.autocomplete.js',
    ), parent::getJavascripts());
  }
}
