<?php

class sfJQueryExtraDemoHtml5Form extends sfJQueryExtraBaseForm
{
  public function configure()
  {
    // Attributes
    $this->widgetSchema['input-placeholder'] = new sfWidgetFormInputText(array(), array(
      'placeholder' => 'Your text goes here'
    ));

    $this->widgetSchema['textarea-placeholder'] = new sfWidgetFormTextarea(array(), array(
      'placeholder' => 'Your text goes here'
    ));
    
    $this->widgetSchema['autofocus'] = new sfWidgetFormInputText(array(), array(
      'autofocus' => true
    ));
    
    $this->widgetSchema['required'] = new sfWidgetFormInputText(array(), array(
      'required' => true
    ));
    
    // Input types
    $this->widgetSchema['type-email'] = new sfWidgetFormInput(array('type' => 'email'));
    $this->widgetSchema['type-url'] = new sfWidgetFormInput(array('type' => 'url'));
    $this->widgetSchema['type-number'] = new sfWidgetFormInput(array('type' => 'number'));
    $this->widgetSchema['type-range'] = new sfWidgetFormInput(array('type' => 'range'));
    $this->widgetSchema['type-range2'] = new sfWidgetFormInput(array('type' => 'range'), array(
      'style' => "height: 75px; width: 49px;",
      'step'  => 10
    ));
    $this->widgetSchema['type-search'] = new sfWidgetFormInput(array('type' => 'search'));
    $this->widgetSchema['type-color'] = new sfWidgetFormInput(array('type' => 'color'));
    $this->widgetSchema['type-date'] = new sfWidgetFormInput(array('type' => 'date'));
    $this->widgetSchema['type-month'] = new sfWidgetFormInput(array('type' => 'month'));
    $this->widgetSchema['type-week'] = new sfWidgetFormInput(array('type' => 'week'));
    $this->widgetSchema['type-time'] = new sfWidgetFormInput(array('type' => 'time'));
    $this->widgetSchema['type-datetime'] = new sfWidgetFormInput(array('type' => 'datetime'));
    $this->widgetSchema['type-datetime-local'] = new sfWidgetFormInput(array('type' => 'datetime-local'));
    
    // Validate
    $this->widgetSchema['min-max-number'] = new sfWidgetFormInput(array(
      'type'  => 'number'
    ), array(
      'min'   => 5,
      'max'   => 10
    ));
    
    $this->widgetSchema['min-max-date'] = new sfWidgetFormInput(array(
      'type'  => 'date'
    ), array(
      'min'   => '1987-08-19',
      'max'   => '2011-05-02'
    ));
    
    $this->widgetSchema['min-max-color'] = new sfWidgetFormInput(array(
      'type'  => 'color'
    ), array(
      'min'   => '#00FF00',
      'max'   => '#FF0000'
    ));
    
    $this->widgetSchema['min-max-range'] = new sfWidgetFormInput(array(
      'type'  => 'range'
    ), array(
      'min'   => '100',
      'max'   => '500'
    ));
    
    $this->widgetSchema->setLabels(array(
      'input-placeholder'     => 'Placeholder on input',
      'textarea-placeholder'  => 'Placeholder on textarea',
      'autofocus'             => 'Autofocus',
      'required'              => 'Required',
      'type-email'            => 'Email',
      'type-url'              => 'Url',
      'type-number'           => 'Number',
      'type-range'            => 'Range',
      'type-range2'           => 'Range (vertical, with step)',
      'type-search'           => 'Search',
      'type-color'            => 'Color',
      'type-date'             => 'Date',
      'type-month'            => 'Month',
      'type-week'             => 'Week',
      'type-time'             => 'Time',
      'type-datetime'         => 'Datetime',
      'type-datetime-local'   => 'Datetime-local',
      'min-max-number'        => 'Number, min:5 / max:10',
      'min-max-date'          => 'Date, min:1987-08-19 / max:2011-05-02',
      'min-max-color'         => 'Color, min:#00FF00 / max:#FF0000',
      'min-max-range'         => 'Range, min:100 / max:500',
    ));
  }
}
