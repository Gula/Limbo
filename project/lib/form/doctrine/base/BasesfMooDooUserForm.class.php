<?php

/**
 * sfMooDooUser form base class.
 *
 * @method sfMooDooUser getObject() Returns the current form's model object
 *
 * @package    limbo
 * @subpackage form
 * @author     Damian Suarez / Laura Melo
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BasesfMooDooUserForm extends sfGuardUserForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('sf_moo_doo_user[%s]');
  }

  public function getModelName()
  {
    return 'sfMooDooUser';
  }

}
