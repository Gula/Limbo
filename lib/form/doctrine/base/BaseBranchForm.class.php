<?php

/**
 * Branch form base class.
 *
 * @method Branch getObject() Returns the current form's model object
 *
 * @package    limbo
 * @subpackage form
 * @author     Damian Suarez / Laura Melo
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseBranchForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'number'       => new sfWidgetFormInputText(),
      'description'  => new sfWidgetFormInputText(),
      'sectional_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Sectional'), 'add_empty' => true)),
      'locality_id'  => new sfWidgetFormInputText(),
      'state_id'     => new sfWidgetFormInputText(),
      'created_at'   => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'number'       => new sfValidatorInteger(array('required' => false)),
      'description'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'sectional_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Sectional'), 'required' => false)),
      'locality_id'  => new sfValidatorInteger(array('required' => false)),
      'state_id'     => new sfValidatorInteger(array('required' => false)),
      'created_at'   => new sfValidatorDateTime(),
      'updated_at'   => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('branch[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Branch';
  }

}
