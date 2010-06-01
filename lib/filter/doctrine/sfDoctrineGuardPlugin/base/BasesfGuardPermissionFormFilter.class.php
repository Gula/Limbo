<?php

/**
 * sfGuardPermission filter form base class.
 *
<<<<<<< HEAD:lib/filter/doctrine/sfDoctrineGuardPlugin/base/BasesfGuardPermissionFormFilter.class.php
 * @package    sf_sandbox
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
=======
 * @package    limbo
 * @subpackage filter
 * @author     Damian Suarez / Laura Melo
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
>>>>>>> 17ef5c46e5bef215d27edb1035336323e4129c9c:lib/filter/doctrine/sfDoctrineGuardPlugin/base/BasesfGuardPermissionFormFilter.class.php
 */
abstract class BasesfGuardPermissionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'        => new sfWidgetFormFilterInput(),
      'description' => new sfWidgetFormFilterInput(),
      'created_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'groups_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardGroup')),
      'users_list'  => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardUser')),
    ));

    $this->setValidators(array(
      'name'        => new sfValidatorPass(array('required' => false)),
      'description' => new sfValidatorPass(array('required' => false)),
      'created_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'groups_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardGroup', 'required' => false)),
      'users_list'  => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardUser', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('sf_guard_permission_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addGroupsListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

<<<<<<< HEAD:lib/filter/doctrine/sfDoctrineGuardPlugin/base/BasesfGuardPermissionFormFilter.class.php
    $query
      ->leftJoin($query->getRootAlias().'.sfGuardGroupPermission sfGuardGroupPermission')
      ->andWhereIn('sfGuardGroupPermission.group_id', $values)
    ;
=======
    $query->leftJoin('r.sfGuardGroupPermission sfGuardGroupPermission')
          ->andWhereIn('sfGuardGroupPermission.group_id', $values);
>>>>>>> 17ef5c46e5bef215d27edb1035336323e4129c9c:lib/filter/doctrine/sfDoctrineGuardPlugin/base/BasesfGuardPermissionFormFilter.class.php
  }

  public function addUsersListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

<<<<<<< HEAD:lib/filter/doctrine/sfDoctrineGuardPlugin/base/BasesfGuardPermissionFormFilter.class.php
    $query
      ->leftJoin($query->getRootAlias().'.sfGuardUserPermission sfGuardUserPermission')
      ->andWhereIn('sfGuardUserPermission.user_id', $values)
    ;
=======
    $query->leftJoin('r.sfGuardUserPermission sfGuardUserPermission')
          ->andWhereIn('sfGuardUserPermission.user_id', $values);
>>>>>>> 17ef5c46e5bef215d27edb1035336323e4129c9c:lib/filter/doctrine/sfDoctrineGuardPlugin/base/BasesfGuardPermissionFormFilter.class.php
  }

  public function getModelName()
  {
    return 'sfGuardPermission';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'name'        => 'Text',
      'description' => 'Text',
      'created_at'  => 'Date',
      'updated_at'  => 'Date',
      'groups_list' => 'ManyKey',
      'users_list'  => 'ManyKey',
    );
  }
}
