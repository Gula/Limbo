<?php

/**
 * BaseService
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property clob $description
 * @property integer $service_type_id
 * @property Doctrine_Collection $Bills
 * 
 * @method integer             getId()              Returns the current record's "id" value
 * @method string              getName()            Returns the current record's "name" value
 * @method clob                getDescription()     Returns the current record's "description" value
 * @method integer             getServiceTypeId()   Returns the current record's "service_type_id" value
 * @method Doctrine_Collection getBills()           Returns the current record's "Bills" collection
 * @method Service             setId()              Sets the current record's "id" value
 * @method Service             setName()            Sets the current record's "name" value
 * @method Service             setDescription()     Sets the current record's "description" value
 * @method Service             setServiceTypeId()   Sets the current record's "service_type_id" value
 * @method Service             setBills()           Sets the current record's "Bills" collection
 * 
 * @package    limbo
 * @subpackage model
 * @author     Damian Suarez / Laura Melo
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseService extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('service');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('name', 'string', 40, array(
             'type' => 'string',
             'length' => 40,
             ));
        $this->hasColumn('description', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('service_type_id', 'integer', null, array(
             'type' => 'integer',
             ));


        $this->setAttribute(Doctrine_Core::ATTR_EXPORT, Doctrine_Core::EXPORT_ALL);

        $this->option('collate', 'utf8_unicode_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Bill as Bills', array(
             'local' => 'id',
             'foreign' => 'service_id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}