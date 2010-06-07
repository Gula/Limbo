<?php

/**
 * Bill filter form base class.
 *
 * @package    limbo
 * @subpackage filter
 * @author     Damian Suarez / Laura Melo
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseBillFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'responsible_id' => new sfWidgetFormFilterInput(),
      'profile_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Profile'), 'add_empty' => true)),
      'bank_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Bank'), 'add_empty' => true)),
      'service_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Service'), 'add_empty' => true)),
      'turning_check'  => new sfWidgetFormFilterInput(),
      'ammount'        => new sfWidgetFormFilterInput(),
      'created_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'responsible_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'profile_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Profile'), 'column' => 'id')),
      'bank_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Bank'), 'column' => 'id')),
      'service_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Service'), 'column' => 'id')),
      'turning_check'  => new sfValidatorPass(array('required' => false)),
      'ammount'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'created_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('bill_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Bill';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'responsible_id' => 'Number',
      'profile_id'     => 'ForeignKey',
      'bank_id'        => 'ForeignKey',
      'service_id'     => 'ForeignKey',
      'turning_check'  => 'Text',
      'ammount'        => 'Number',
      'created_at'     => 'Date',
      'updated_at'     => 'Date',
    );
  }
}
