<?php

/**
 * sfMooDooPermission filter form base class.
 *
 * @package    sf_sandbox
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedInheritanceTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
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
