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

interface ManagerInterface
{

    function __construct(Container $app, string $route = null, string $block = null);

    public function get(Request $request);

    public function post(Request $request);

}
 