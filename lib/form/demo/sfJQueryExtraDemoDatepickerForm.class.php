<?php

class sfJQueryExtraDemoDatepickerForm extends BaseForm
{
  public function configure()
  {
    $this->setWidget('intl',new sfWidgetExtraWidgetDate(array(
        'culture' => '',
    )));
    $this->setValidator('intl', new sfValidatorDate());

    $this->setWidget('fr',new sfWidgetExtraWidgetDate(array(
        'culture' => 'fr',
    )));
    $this->setValidator('fr', new sfValidatorDate());

    $this->setWidget('ar',new sfWidgetExtraWidgetDate(array(
        'culture' => 'ar',
    )));
    $this->setValidator('ar', new sfValidatorDate());

    $this->setWidget('with_max_date',new sfWidgetExtraWidgetDate(array(
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