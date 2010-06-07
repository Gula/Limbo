<?php

/**
 * MGAlbumGallery form base class.
 *
 * @method MGAlbumGallery getObject() Returns the current form's model object
 *
 * @package    limbo
 * @subpackage form
 * @author     Damian Suarez / Laura Melo
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMGAlbumGalleryForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'gallery_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MGGallery'), 'add_empty' => true)),
      'album_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MGAlbum'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'gallery_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('MGGallery'), 'required' => false)),
      'album_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('MGAlbum'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('mg_album_gallery[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MGAlbumGallery';
  }

}
