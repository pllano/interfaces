<?php /**
 * Interfaces (https://pllano.com)
 *
 * @link https://github.com/pllano/interfaces
 * @version 1.2.0
 * @copyright Copyright (c) 2017-2018 PLLANO
 * @license http://opensource.org/licenses/MIT (MIT License)
 */
namespace Pllano\Interfaces;

use Pllano\Interfaces\ApisInterface;

interface DatabaseInterface extends ApiInterface
{
    /*************************************
    * ApiInterface
    *************************************/
    public function __construct(array $config = [], array $options = [], string $prefix = null, $other_base = null);
    public function api($data);
    public function ping(string $resource = null);
    public function get(string $resource = null, array $query = [], int $id = null, string $field_id = null);
    public function search(string $resource = null, string $keyword = null, array $query = [], string $field_id = null);
    public function post(string $resource = null, array $query = [], string $field_id = null);
    public function put(string $resource = null, array $query = [], int $id = null, string $field_id = null);
    public function patch(string $resource = null, array $query = [], int $id = null, string $field_id = null);
    public function delete(string $resource = null, array $query = [], int $id = null, string $field_id = null);
    public function count(string $resource = null, array $query = [], int $id = null, string $field_id = null);

    /*************************************
    * ApisInterface extends ApiInterface
    *************************************/
    public function apis($data);
    //public function setType(string $type = null);
    //public function setCode(int $code = null);
    //public function setMessage(string $message = null);
    //public function setHttpCodes(string $httpCode = null);

    /*************************************
    * DatabaseInterface extends ApisInterface
    *************************************/
    public function pdo($data);
    public function last_id(string $resource = null, string $field_id = null);
    public function fieldMap($resource = null);
    public function tableSchema($table);

}
 