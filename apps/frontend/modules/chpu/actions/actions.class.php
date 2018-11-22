<?php

/**
 * chpu actions.
 *
 * @package    online
 * @subpackage chpu
 * @author     Farrukh Umurzakov
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class chpuActions extends sfActions
{
    public function executeIndex(sfWebRequest $request)
    {
        $this->chpu_mains = Doctrine::getTable('ChpuMain')
            ->createQuery('a')
            ->execute();
        $this->foo = 'bar';
        $this->bar = array('bar', 'baz');
    }

  public function executeShow(sfWebRequest $request)
  {
      $this->chpu = $this->getRoute()->getObject();
  }
  public function executeReurl(sfWebRequest $request)
  {
      $this->chpu = $this->getRoute()->getObject();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ChpuMainForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ChpuMainForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($chpu_main = Doctrine::getTable('ChpuMain')->find(array($request->getParameter('id'))), sprintf('Object chpu_main does not exist (%s).', $request->getParameter('id')));
    $chpu_main->delete();

    $this->redirect('chpu/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $chpu_main = $form->save();

        $this->redirect($this->generateUrl('chpu_show', $chpu_main));
    }
  }
}
