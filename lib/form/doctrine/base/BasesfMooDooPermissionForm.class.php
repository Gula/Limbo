<?php

/**
 * sfMooDooPermission form base class.
 *
 * @method sfMooDooPermission getObject() Returns the current form's model object
 *
 * @package    limbo
 * @subpackage form
 * @author     Damian Suarez / Laura Melo
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasesfMooDooPermissionForm extends sfGuardPermissionForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('sf_moo_doo_permission[%s]');
  }

  public function getModelName()
  {
    return 'sfMooDooPermission';
  }

}
