<?php

/**
 * Bill form base class.
 *
 * @method Bill getObject() Returns the current form's model object
 *
 * @package    limbo
 * @subpackage form
 * @author     Damian Suarez / Laura Melo
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseBillForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'responsible_id' => new sfWidgetFormInputText(),
      'profile_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Profile'), 'add_empty' => true)),
      'bank_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Bank'), 'add_empty' => true)),
      'service_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Service'), 'add_empty' => true)),
      'turning_check'  => new sfWidgetFormInputText(),
      'ammount'        => new sfWidgetFormInputText(),
      'created_at'     => new sfWidgetFormDateTime(),
      'updated_at'     => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'responsible_id' => new sfValidatorInteger(array('required' => false)),
      'profile_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Profile'), 'required' => false)),
      'bank_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Bank'), 'required' => false)),
      'service_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Service'), 'required' => false)),
      'turning_check'  => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'ammount'        => new sfValidatorNumber(array('required' => false)),
      'created_at'     => new sfValidatorDateTime(),
      'updated_at'     => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('bill[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Bill';
  }

}
