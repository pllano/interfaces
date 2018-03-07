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

use Psr\Http\Message\{ServerRequestInterface as Request, ResponseInterface as Response};
use Psr\Container\ContainerInterface as Container;
use Pllano\Interfaces\ModelInterface;

interface ModuleInterface extends ModelInterface
{

    public function __construct(Container $app, string $route = null, string $block = null, string $modulKey = null, array $modulVal = []);

    public function get(Request $request);

    public function post(Request $request);

}
 