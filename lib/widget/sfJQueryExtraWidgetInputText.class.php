<?php

class sfJQueryExtraWidgetInputText extends sfWidgetFormInputText
{
  protected function configure($options = array(), $attributes = array())
  {
    parent::configure($options, $attributes);

    $this->addOption('autocomplete', null);

  }

  public function render($name, $value = null, $attributes = array(), $errors = array())
  {
    $autocomplete = $this->getOption('autocomplete');
    if (null !== $autocomplete)
    {
      if (!isset ($autocomplete['source']) || empty ($autocomplete['source']))
      {
        throw new InvalidArgumentException('autocomplete option need a source parameter');
      }

      $attributes = array_merge(array(
        'data-sfautocomplete' => json_encode($autocomplete)
      ), $attributes);
    }

    return parent::render($name, $value, $attributes, $errors);
  }

  public function getJavascripts()
  {
    $js = array();

    $autocomplete = $this->getOption('autocomplete');
    if (null !== $autocomplete)
    {
      $js[] = '/sfJQueryExtraFormPlugin/js/bootstrap.autocomplete.js';
    }

    return array_merge($js, parent::getJavascripts());
  }
}
