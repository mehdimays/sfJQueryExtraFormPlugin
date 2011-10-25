<?php

class sfJQueryExtraDemoAutoCompleteForm extends BaseForm
{
  public function configure()
  {
    $this->widgetSchema['autocomplete'] = new sfJQueryExtraWidgetInputText(array(
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
    ));
  }
}
