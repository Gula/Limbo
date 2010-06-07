<?php

/**
 * sfMooDooPermission filter form base class.
 *
 * @package    limbo
 * @subpackage filter
 * @author     Damian Suarez / Laura Melo
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedInheritanceTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BasesfMooDooPermissionFormFilter extends sfGuardPermissionFormFilter
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('sf_moo_doo_permission_filters[%s]');
  }

  public function getModelName()
  {
    return 'sfMooDooPermission';
  }
}
