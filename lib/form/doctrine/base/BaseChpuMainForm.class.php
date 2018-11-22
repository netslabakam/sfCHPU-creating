<?php

/**
 * ChpuMain form base class.
 *
 * @method ChpuMain getObject() Returns the current form's model object
 *
 * @package    online
 * @subpackage form
 * @author     Farrukh Umurzakov
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseChpuMainForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'url'        => new sfWidgetFormInputText(),
      'short'      => new sfWidgetFormInputText(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'url'        => new sfValidatorString(array('max_length' => 255)),
      'short'      => new sfValidatorString(array('max_length' => 255)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorDoctrineUnique(array('model' => 'ChpuMain', 'column' => array('url'))),
        new sfValidatorDoctrineUnique(array('model' => 'ChpuMain', 'column' => array('short'))),
      ))
    );

    $this->widgetSchema->setNameFormat('chpu_main[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ChpuMain';
  }

}
