<?php

/**
 * MGGallery filter form base class.
 *
 * @package    limbo
 * @subpackage filter
 * @author     Damian Suarez / Laura Melo
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMGGalleryFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'author_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Author'), 'add_empty' => true)),
      'title'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'description' => new sfWidgetFormFilterInput(),
      'created_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'albums_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'MGAlbum')),
      'photos_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'MGPhoto')),
    ));

    $this->setValidators(array(
      'author_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Author'), 'column' => 'id')),
      'title'       => new sfValidatorPass(array('required' => false)),
      'description' => new sfValidatorPass(array('required' => false)),
      'created_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'albums_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'MGAlbum', 'required' => false)),
      'photos_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'MGPhoto', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('mg_gallery_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addAlbumsListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query
      ->leftJoin($query->getRootAlias().'.MGAlbumGallery MGAlbumGallery')
      ->andWhereIn('MGAlbumGallery.album_id', $values)
    ;
  }

  public function addPhotosListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query
      ->leftJoin($query->getRootAlias().'.MGGalleryPhoto MGGalleryPhoto')
      ->andWhereIn('MGGalleryPhoto.photo_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'MGGallery';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'author_id'   => 'ForeignKey',
      'title'       => 'Text',
      'description' => 'Text',
      'created_at'  => 'Date',
      'updated_at'  => 'Date',
      'albums_list' => 'ManyKey',
      'photos_list' => 'ManyKey',
    );
  }
}
