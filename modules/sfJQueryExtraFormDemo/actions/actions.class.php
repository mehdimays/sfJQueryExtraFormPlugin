<?php
class sfJQueryExtraFormDemoActions extends sfActions
{
  public function executeIndex(sfwebRequest $request)
  {
    
  }
  
  public function executeAutocomplete(sfwebRequest $request)
  {
    $this->form = new sfJQueryExtraDemoAutoCompleteForm();
  }

  public function executeDatepicker(sfWebRequest $request)
  {

    $this->form = new sfJQueryExtraDemoDatepickerForm();
  }
}