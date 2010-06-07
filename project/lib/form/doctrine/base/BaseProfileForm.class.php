<?php

/**
 * Profile form base class.
 *
 * @method Profile getObject() Returns the current form's model object
 *
 * @package    limbo
 * @subpackage form
 * @author     Damian Suarez / Laura Melo
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProfileForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'sf_guard_user_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => true)),
      'membership_number' => new sfWidgetFormInputText(),
      'first_name'        => new sfWidgetFormInputText(),
      'last_name'         => new sfWidgetFormInputText(),
      'birth_date'        => new sfWidgetFormDate(),
      'documment_type'    => new sfWidgetFormChoice(array('choices' => array('dni' => 'dni', 'le' => 'le'))),
      'documment_number'  => new sfWidgetFormInputText(),
      'phone'             => new sfWidgetFormInputText(),
      'movil'             => new sfWidgetFormInputText(),
      'email'             => new sfWidgetFormInputText(),
      'addres'            => new sfWidgetFormInputText(),
      'addres_2'          => new sfWidgetFormInputText(),
      'locality_id'       => new sfWidgetFormInputText(),
      'created_at'        => new sfWidgetFormDateTime(),
      'updated_at'        => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'sf_guard_user_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'required' => false)),
      'membership_number' => new sfValidatorInteger(array('required' => false)),
      'first_name'        => new sfValidatorString(array('max_length' => 100)),
      'last_name'         => new sfValidatorString(array('max_length' => 100)),
      'birth_date'        => new sfValidatorDate(array('required' => false)),
      'documment_type'    => new sfValidatorChoice(array('choices' => array(0 => 'dni', 1 => 'le'), 'required' => false)),
      'documment_number'  => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'phone'             => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'movil'             => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'email'             => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'addres'            => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'addres_2'          => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'locality_id'       => new sfValidatorInteger(array('required' => false)),
      'created_at'        => new sfValidatorDateTime(),
      'updated_at'        => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('profile[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Profile';
  }

}
