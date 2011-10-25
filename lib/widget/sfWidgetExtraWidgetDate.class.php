<?php

/**
 * sfWidgetExtraWidgetDate represents a date widget with jQuery UI datepicker.
 *
 * @package    sfJQueryExtraFormPlugin
 * @subpackage widget
 * @author     Sensio Labs
 * @version    
 */
class sfWidgetExtraWidgetDate extends sfWidgetFormI18nDate
{

  /**
   * Constructor.
   *
   * Available options:
   *
   *  * culture:      The culture to use for internationalized strings (required)
   *  * month_format: The month format (name - default, short_name, number)
   *  * datepicker:   The array of options used to construct the jQuery UI datepicker (see http://jqueryui.com/demos/datepicker/)
   * 
   *
   * @param array $options     An array of options
   * @param array $attributes  An array of default HTML attributes
   *
   * @see sfWidgetFormDate
   */
  protected function configure($options = array(), $attributes = array())
  {
    parent::configure($options, $attributes);

    // Js Options
    $this->addOption('datepicker', array());
  }

  /**
   * Renders the widget.
   *
   * @param  string $name        The element name
   * @param  string $value       The date displayed in this widget
   * @param  array  $attributes  An array of HTML attributes to be merged with the default HTML attributes
   * @param  array  $errors      An array of errors for the field
   *
   * @return string An HTML tag string
   *
   * @see sfWidgetFormDate
   */
  public function render($name, $value = null, $attributes = array(), $errors = array())
  {
    $js_options = array(
        'culture' => $this->getOption('culture'),
        'prefix' => $this->generateId($name),
        'datepicker_options' => array_merge(
          $this->getOption('datepicker'),
          array(
            'showOn' => 'both',
            'dateFormat' => 'mm/dd/yy',
          )
        ),
    );

    return parent::render($name, $value, $attributes, $errors) .
      $this->renderTag('input', array(
        'disabled' => 'disabled',
        'type' => 'hidden',
        'size' => 10,
        'id' => $js_options['prefix'] . '_jquery_control',
        'data-sfdatepicker' => json_encode($js_options),
      )
    );
  }

  public function getJavascripts()
  {
    return array_merge(array('/sfJQueryExtraFormPlugin/js/bootstrap.datepicker.js',), parent::getJavascripts());
  }

}