<?php

class sfJQueryExtraDemoDatepickerForm extends sfJQueryExtraBaseForm
{
  public function configure()
  {
    $this->setWidget('intl',new sfJQueryExtraWidgetDate(array(
        'culture' => '',
    )));
    $this->setValidator('intl', new sfValidatorDate());

    $this->setWidget('fr',new sfJQueryExtraWidgetDate(array(
        'culture' => 'fr',
    )));
    $this->setValidator('fr', new sfValidatorDate());

    $this->setWidget('ar',new sfJQueryExtraWidgetDate(array(
        'culture' => 'ar',
    )));
    $this->setValidator('ar', new sfValidatorDate());

    $this->setWidget('with_max_date',new sfJQueryExtraWidgetDate(array(
        'culture' => 'uk',
        'datepicker' => array(
          'maxDate' => '+1d',
          'showButtonPanel' => 'true'
        ),
    )));
    $this->setValidator('with_max_date', new sfValidatorDate());

    $this->widgetSchema->setNameFormat('datepicker[%s]');
  }

  public function setDefaults($defaults)
  {
    $defaults['fr'] = '01/13/2012';
    parent::setDefaults($defaults);
  }
}