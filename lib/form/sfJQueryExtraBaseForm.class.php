<?php

class sfJQueryExtraBaseForm extends BaseForm
{
  public function getStylesheets()
  {
    return array_merge(array(
      '/sfJQueryExtraFormPlugin/css/jquery.html5.css' => 'all',
    ), parent::getStylesheets());
  }

  public function getJavascripts()
  {
    return array_merge(array(
      '/sfJQueryExtraFormPlugin/js/main.js',
      '/sfJQueryExtraFormPlugin/js/jquery.html5.js',
    ), parent::getJavascripts());
  }
}