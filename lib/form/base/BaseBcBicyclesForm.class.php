<?php

/**
 * BcBicycles form base class.
 *
 * @method BcBicycles getObject() Returns the current form's model object
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseBcBicyclesForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'name'        => new sfWidgetFormInputText(),
      'year'        => new sfWidgetFormInputText(),
      'frame'       => new sfWidgetFormInputText(),
      'speeds'      => new sfWidgetFormInputText(),
      'brakes'      => new sfWidgetFormInputText(),
      'application' => new sfWidgetFormInputText(),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'name'        => new sfValidatorString(array('max_length' => 255)),
      'year'        => new sfValidatorNumber(array('required' => false)),
      'frame'       => new sfValidatorNumber(array('required' => false)),
      'speeds'      => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'brakes'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'application' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'  => new sfValidatorDateTime(array('required' => false)),
      'updated_at'  => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('bc_bicycles[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'BcBicycles';
  }


}
