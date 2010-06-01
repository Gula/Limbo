<?php

/**
 * BaseMGCategory
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $title
 * @property clob $description
 * 
 * @method integer    getId()          Returns the current record's "id" value
 * @method string     getTitle()       Returns the current record's "title" value
 * @method clob       getDescription() Returns the current record's "description" value
 * @method MGCategory setId()          Sets the current record's "id" value
 * @method MGCategory setTitle()       Sets the current record's "title" value
 * @method MGCategory setDescription() Sets the current record's "description" value
 * 
 * @package    limbo
 * @subpackage model
 * @author     Damian Suarez / Laura Melo
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseMGCategory extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('mdgalledy_category');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
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
        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}