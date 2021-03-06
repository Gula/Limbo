<?php

/**
 * MGAlbum form base class.
 *
 * @method MGAlbum getObject() Returns the current form's model object
 *
 * @package    limbo
 * @subpackage form
 * @author     Damian Suarez / Laura Melo
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMGAlbumForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'author_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Author'), 'add_empty' => true)),
      'title'          => new sfWidgetFormInputText(),
      'description'    => new sfWidgetFormTextarea(),
      'created_at'     => new sfWidgetFormDateTime(),
      'updated_at'     => new sfWidgetFormDateTime(),
      'galleries_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'MGGallery')),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'author_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Author'), 'required' => false)),
      'title'          => new sfValidatorString(array('max_length' => 100)),
      'description'    => new sfValidatorString(array('required' => false)),
      'created_at'     => new sfValidatorDateTime(),
      'updated_at'     => new sfValidatorDateTime(),
      'galleries_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'MGGallery', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('mg_album[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MGAlbum';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['galleries_list']))
    {
      $this->setDefault('galleries_list', $this->object->Galleries->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveGalleriesList($con);

    parent::doSave($con);
  }

  public function saveGalleriesList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['galleries_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Galleries->getPrimaryKeys();
    $values = $this->getValue('galleries_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Galleries', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Galleries', array_values($link));
    }
  }

}
