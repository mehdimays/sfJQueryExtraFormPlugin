<?php

/**
 * sfJQueryExtraWidgetInputFile represents an ajax upload HTML input tag.
 *
 * @package    sfJQueryExtraFormPlugin
 * @subpackage widget
 * @author     Clement Gautier <clement.gautier@smartit.fr>
 */
class sfJQueryExtraWidgetInputFile extends sfWidgetFormInputFile
{
  /**
   * Configures the current widget.
   *
   * @param array $options     An array of options
   * @param array $attributes  An array of default HTML attributes
   *
   * @see sfWidgetFormInput
   */
  protected function configure($options = array(), $attributes = array())
  {
    parent::configure($options, $attributes);
  }

  public function render($name, $value = null, $attributes = array(), $errors = array())
  {
    $html = '<div class="fileupload-buttonbar">
            <label class="fileinput-button">
                <span>Add files...</span>
			'.parent::render($name, $value, $attributes, $errors).'	
			</label>
            <button type="submit" class="start">Start upload</button>
            <button type="reset" class="cancel">Cancel upload</button>
            <button type="button" class="delete">Delete files</button>
        </div>';
    $html .= $this->buildJS($name);
    return $html;
  }

  public function buildJS($name)
  {
    sfContext::getInstance()->getConfiguration()->loadHelpers('JavascriptBase');
    $js = <<<EOF
$(function () {
    'use strict';

    // Initialize the jQuery File Upload widget:
    $('#$name').parent().fileupload();

    // Load existing files:
	$.getJSON($('#$name').parent('form').prop('action'), function (files) {
        var fu = $('#$name').parent().data('fileupload');
        fu._adjustMaxNumberOfFiles(-files.length);
        fu._renderDownload(files)
            .appendTo($('#$name').parent().find('.files'))
            .fadeIn(function () {
                // Fix for IE7 and lower:
                $(this).show();
            });
    });

    // Open download dialogs via iframes,
    // to prevent aborting current uploads:
    $('#fileupload .files a:not([target^=_blank])').live('click', function (e) {
        e.preventDefault();
        $('<iframe style="display:none;"></iframe>')
            .prop('src', this.href)
            .appendTo('body');
    });

});
EOF;

    return javascript_tag($js);
  }

  public function getStylesheets()
  {
    return array_merge(array(
      '/sfJQueryExtraFormPlugin/css/jquery.fileupload-ui.css' => 'all',
    ), parent::getStylesheets());
  }

  public function getJavascripts()
  {
    return array_merge(array(
      '/sfJQueryExtraFormPlugin/js/jquery.iframe-transport.js',
      '/sfJQueryExtraFormPlugin/js/jquery.fileupload.js',
      '/sfJQueryExtraFormPlugin/js/jquery.fileupload-ui.js',
    ), parent::getJavascripts());
  }

}
