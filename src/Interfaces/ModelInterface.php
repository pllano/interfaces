<?php 
/**
 * Interfaces (https://pllano.com)
 *
 * @link https://github.com/pllano/interfaces
 * @version 1.0.1
 * @copyright Copyright (c) 2017-2018 PLLANO
 * @license http://opensource.org/licenses/MIT (MIT License)
 */
namespace Pllano\Interfaces;

use Psr\Container\ContainerInterface as Container;
use Pllano\Interfaces\DataInterface;

interface ModelInterface extends DataInterface
{

    public function __construct(Container $app);

    public function connectContainer();
    public function connectDatabases();

    /*************************************
    * Database
    *************************************/
    public function setIdField($idField = null);
    public function getIdField();
    public function setTable($table = null);
    public function getTable();

    /*************************************
    * DatabaseInterface
    *************************************/
    public function getFieldMap($table = null);
    public function fieldMap($table = null);
    public function tableSchema($table = null);
    public function getList(array $filters = [], $joinTables = null, $orderBy = null, $count = null, $offset = null);
    public function getIdByAlias(string $alias = null);

    public function getOne($id = null);
    public function save();
    public function delete();

    /*************************************
    * Data Interface
    *************************************/
    public function createData(array $data = []);
    public function addData($key, $value = null, $pop = false);
    public function hasId();
    public function getId();
    public function setId($newId = null);
    public function setData($key, $value = null);
    public function setDataOne($key, $value);
    public function getData($key, $default = null);
    public function getDataOne($key, $default = null);
    public function pullData($key = null, $default = null);
    public function replaceData(array $data = []);
    public function allData();
    public function keysData();
    public function hasDataOne($key);
    public function hasData($key);
    public function existsData($array, $key);
    public function deleteData($key);
    public function deleteDataOne($key);
    public function removeData($key);
    public function clearDataAll();
    public function clearData($key = null);
    public function sortData($key = null);
    public function sortRecursiveData($key = null, $array = null);
    public function sortArrayData($array);
    public function accessibleData($value);
    public function isAssocData($array = null);
    public function setArrayData($array);
    public function setReferenceData(&$array);

    /*************************************
    * ArrayAccess Interface
    *************************************/
    public function offsetSet($offset, $value);
    public function offsetExists($offset);
    public function offsetUnset($offset);
    public function offsetGet($offset);

    /*************************************
    * ArrayIterator Interface
    *************************************/
    public function getIterator();

    /*************************************
    * Magic Methods
    *************************************/
    public function __set($key, $value = null);
    public function __get($key);
    public function __isset($key);
    public function __unset($key);

}
 