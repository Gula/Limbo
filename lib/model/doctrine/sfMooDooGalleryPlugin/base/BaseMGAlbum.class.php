<?php

/**
 * BaseMGAlbum
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $author_id
 * @property string $title
 * @property clob $description
 * @property Doctrine_Collection $Galleries
 * @property Doctrine_Collection $MGAlbumGallery
 * 
 * @method integer             getId()             Returns the current record's "id" value
 * @method integer             getAuthorId()       Returns the current record's "author_id" value
 * @method string              getTitle()          Returns the current record's "title" value
 * @method clob                getDescription()    Returns the current record's "description" value
 * @method Doctrine_Collection getGalleries()      Returns the current record's "Galleries" collection
 * @method Doctrine_Collection getMGAlbumGallery() Returns the current record's "MGAlbumGallery" collection
 * @method MGAlbum             setId()             Sets the current record's "id" value
 * @method MGAlbum             setAuthorId()       Sets the current record's "author_id" value
 * @method MGAlbum             setTitle()          Sets the current record's "title" value
 * @method MGAlbum             setDescription()    Sets the current record's "description" value
 * @method MGAlbum             setGalleries()      Sets the current record's "Galleries" collection
 * @method MGAlbum             setMGAlbumGallery() Sets the current record's "MGAlbumGallery" collection
 * 
 * @package    limbo
 * @subpackage model
 * @author     Damian Suarez / Laura Melo
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseMGAlbum extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('mdgalledy_album');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('author_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('title', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 100,
             ));
        $this->hasColumn('description', 'clob', null, array(
             'type' => 'clob',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('MGGallery as Galleries', array(
             'refClass' => 'MGAlbumGallery',
             'local' => 'album_id',
             'foreign' => 'gallery_id'));

        $this->hasMany('MGAlbumGallery', array(
             'local' => 'id',
             'foreign' => 'album_id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}