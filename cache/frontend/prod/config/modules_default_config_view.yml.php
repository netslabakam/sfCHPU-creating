<?php
// auto-generated by sfViewConfigHandler
// date: 2018/11/23 00:31:04
$response = $this->context->getResponse();


  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());



  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);

  $response->addStylesheet('bootstrap.min.css', '', array ());
  $response->addStylesheet('mdb.min.css', '', array ());
  $response->addJavascript('jquery-3.3.1.min.js', '', array ());
  $response->addJavascript('popper.min.js', '', array ());
  $response->addJavascript('bootstrap.min.js', '', array ());
  $response->addJavascript('mdb.min.js', '', array ());


