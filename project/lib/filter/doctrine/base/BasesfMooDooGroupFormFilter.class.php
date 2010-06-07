<?php

/**
 * sfMooDooGroup filter form base class.
 *
 * @package    limbo
 * @subpackage filter
 * @author     Damian Suarez / Laura Melo
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedInheritanceTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BasesfMooDooGroupFormFilter extends sfGuardGroupFormFilter
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('sf_moo_doo_group_filters[%s]');
  }

  public function getModelName()
  {
    return 'sfMooDooGroup';
  }
}
