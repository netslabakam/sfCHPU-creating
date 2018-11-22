<?php

/**
 * ChpuMain form.
 *
 * @package    online
 * @subpackage form
 * @author     Farrukh Umurzakov
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ChpuMainForm extends BaseChpuMainForm
{
  public function configure()
  {
//      будем выводить только 2 поля
      $this->useFields(array('url', 'short'));


      $this->validatorSchema['url'] = new sfValidatorAnd(array(
          $this->validatorSchema{'url'},
          new sfValidatorUrl(),
      ));
  }
}
