<?php

/**
 * MGAlbumGallery filter form base class.
 *
 * @package    limbo
 * @subpackage filter
 * @author     Damian Suarez / Laura Melo
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMGAlbumGalleryFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'gallery_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MGGallery'), 'add_empty' => true)),
      'album_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MGAlbum'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'gallery_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('MGGallery'), 'column' => 'id')),
      'album_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('MGAlbum'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('mg_album_gallery_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MGAlbumGallery';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'gallery_id' => 'ForeignKey',
      'album_id'   => 'ForeignKey',
    );
  }
}
