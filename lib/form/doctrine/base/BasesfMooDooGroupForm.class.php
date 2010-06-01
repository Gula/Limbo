<?php

/**
 * sfMooDooGroup form base class.
 *
 * @method sfMooDooGroup getObject() Returns the current form's model object
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasesfMooDooGroupForm extends sfGuardGroupForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('sf_moo_doo_group[%s]');
  }

  public function getModelName()
  {
    return 'sfMooDooGroup';
  }

}
