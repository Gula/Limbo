<?php

/**
 * BaseSectional
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property Doctrine_Collection $Branchs
 * 
 * @method integer             getId()      Returns the current record's "id" value
 * @method string              getName()    Returns the current record's "name" value
 * @method Doctrine_Collection getBranchs() Returns the current record's "Branchs" collection
 * @method Sectional           setId()      Sets the current record's "id" value
 * @method Sectional           setName()    Sets the current record's "name" value
 * @method Sectional           setBranchs() Sets the current record's "Branchs" collection
 * 
 * @package    limbo
 * @subpackage model
 * @author     Damian Suarez / Laura Melo
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSectional extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('sectional');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('name', 'string', 40, array(
             'type' => 'string',
             'length' => 40,
             ));


        $this->setAttribute(Doctrine_Core::ATTR_EXPORT, Doctrine_Core::EXPORT_ALL);

        $this->option('collate', 'utf8_unicode_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Branch as Branchs', array(
             'local' => 'id',
             'foreign' => 'sectional_id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}