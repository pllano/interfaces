<?php
/**
 * Interfaces (https://pllano.com)
 *
 * @link https://github.com/pllano/interfaces
 * @version 1.2.0
 * @copyright Copyright (c) 2017-2018 PLLANO
 * @license http://opensource.org/licenses/MIT (MIT License)
 */
namespace Pllano\Interfaces;

interface ApisInterface
{
	public function apis(array $arr = [], string $type = null);
    public function setType(string $type = null);
    public function setCode(int $code = null);
    public function setMessage(string $message = null);
    public function setHttpCodes(string $httpCode = null);

}
 