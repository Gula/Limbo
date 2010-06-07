<?php

/**
 * Profile filter form base class.
 *
 * @package    limbo
 * @subpackage filter
 * @author     Damian Suarez / Laura Melo
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseProfileFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'sf_guard_user_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => true)),
      'membership_number' => new sfWidgetFormFilterInput(),
      'first_name'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'last_name'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'birth_date'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'documment_type'    => new sfWidgetFormChoice(array('choices' => array('' => '', 'dni' => 'dni', 'le' => 'le'))),
      'documment_number'  => new sfWidgetFormFilterInput(),
      'phone'             => new sfWidgetFormFilterInput(),
      'movil'             => new sfWidgetFormFilterInput(),
      'email'             => new sfWidgetFormFilterInput(),
      'addres'            => new sfWidgetFormFilterInput(),
      'addres_2'          => new sfWidgetFormFilterInput(),
      'locality_id'       => new sfWidgetFormFilterInput(),
      'created_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'sf_guard_user_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('sfGuardUser'), 'column' => 'id')),
      'membership_number' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'first_name'        => new sfValidatorPass(array('required' => false)),
      'last_name'         => new sfValidatorPass(array('required' => false)),
      'birth_date'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'documment_type'    => new sfValidatorChoice(array('required' => false, 'choices' => array('dni' => 'dni', 'le' => 'le'))),
      'documment_number'  => new sfValidatorPass(array('required' => false)),
      'phone'             => new sfValidatorPass(array('required' => false)),
      'movil'             => new sfValidatorPass(array('required' => false)),
      'email'             => new sfValidatorPass(array('required' => false)),
      'addres'            => new sfValidatorPass(array('required' => false)),
      'addres_2'          => new sfValidatorPass(array('required' => false)),
      'locality_id'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('profile_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Profile';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'sf_guard_user_id'  => 'ForeignKey',
      'membership_number' => 'Number',
      'first_name'        => 'Text',
      'last_name'         => 'Text',
      'birth_date'        => 'Date',
      'documment_type'    => 'Enum',
      'documment_number'  => 'Text',
      'phone'             => 'Text',
      'movil'             => 'Text',
      'email'             => 'Text',
      'addres'            => 'Text',
      'addres_2'          => 'Text',
      'locality_id'       => 'Number',
      'created_at'        => 'Date',
      'updated_at'        => 'Date',
    );
  }
}
