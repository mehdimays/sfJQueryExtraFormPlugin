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
  
  public function executeRemoteAutocomplete(sfwebRequest $request)
  {
    $this->forward404Unless($request->isXmlHttpRequest());

    $matches = array();

    if ($request->hasParameter('term'))
    {
      $term = trim($request->getParameter('term'));

      if (!empty ($term))
      {
        $lorem = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel odio at elit tempus lobortis tincidunt eu metus. Vivamus vulputate, nisl in hendrerit iaculis, ipsum diam auctor purus, fermentum mattis tortor massa ut justo. Morbi justo nisl, sagittis sed pulvinar in, euismod eget purus. Curabitur arcu mi, lobortis ac tincidunt non, pellentesque a ante. In adipiscing, dolor ut venenatis lacinia, enim elit blandit diam, et porta dui dolor et ipsum. Pellentesque sagittis venenatis velit. Nulla egestas, arcu non gravida facilisis, velit turpis tempus nunc, auctor interdum elit turpis ut sem. Phasellus augue nibh, dapibus eget imperdiet lacinia, porttitor vel dui.";
        $lorem = str_replace(array(',', '.'), '', $lorem);

        if (preg_match_all("/(\S*".$term."\S*)/i", $lorem, $matches))
        {
          $matches = $matches[0];
          $matches = array_unique(array_filter($matches));
        }
      }
    }

    $this->renderText(json_encode($matches));
    return sfView::NONE;
  }

}