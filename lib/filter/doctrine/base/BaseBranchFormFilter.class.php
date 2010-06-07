<?php

/**
 * Branch filter form base class.
 *
 * @package    limbo
 * @subpackage filter
 * @author     Damian Suarez / Laura Melo
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseBranchFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'number'       => new sfWidgetFormFilterInput(),
      'description'  => new sfWidgetFormFilterInput(),
      'sectional_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Sectional'), 'add_empty' => true)),
      'locality_id'  => new sfWidgetFormFilterInput(),
      'state_id'     => new sfWidgetFormFilterInput(),
      'created_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'number'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'description'  => new sfValidatorPass(array('required' => false)),
      'sectional_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Sectional'), 'column' => 'id')),
      'locality_id'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'state_id'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('branch_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Branch';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'number'       => 'Number',
      'description'  => 'Text',
      'sectional_id' => 'ForeignKey',
      'locality_id'  => 'Number',
      'state_id'     => 'Number',
      'created_at'   => 'Date',
      'updated_at'   => 'Date',
    );
  }
}
