<?php

class sfJQueryExtraDemoAutoCompleteForm extends sfJQueryExtraBaseForm
{
  public function configure()
  {
    $this->widgetSchema['simple-autocomplete'] = new sfJQueryExtraWidgetInputText(array(
      'autocomplete' => array(
        'source' => array(
          "ActionScript",
          "AppleScript",
          "Asp",
          "BASIC",
          "C",
          "C++",
          "Clojure",
          "COBOL",
          "ColdFusion",
          "Erlang",
          "Fortran",
          "Groovy",
          "Haskell",
          "Java",
          "JavaScript",
          "Lisp",
          "Perl",
          "PHP",
          "Python",
          "Ruby",
          "Scala",
          "Scheme"
        )
      )
    ));

    sfContext::getInstance()->getConfiguration()->loadHelpers('Url');

    $this->widgetSchema['remote-autocomplete'] = new sfJQueryExtraWidgetInputText(array(
      'autocomplete' => array(
        'source'      => url_for('sfJQueryExtraFormDemo/remoteAutocomplete'),
        'minLength'   => 2,
      )
    ));

  }
}
