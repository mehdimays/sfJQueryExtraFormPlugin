<?php

class sfJQueryExtraWidgetInputText extends sfWidgetFormInputText
{
  protected function configure($options = array(), $attributes = array())
  {
    parent::configure($options, $attributes);

    $this->setOption('type', 'text');
  }

  public function render($name, $value = null, $attributes = array(), $errors = array())
  {
    sfContext::getInstance()->getConfiguration()->loadHelpers('JavascriptBase');

    $attributes = $this->fixFormId(array_merge(array('type' => $this->getOption('type'), 'name' => $name, 'value' => $value), $attributes));
    
    $js = '$(function (){ $("#'.$attributes['id'].'").autocomplete(); });';

    return parent::render($name, $value, $attributes, $errors)."\n".javascript_tag($js);
  }
}
