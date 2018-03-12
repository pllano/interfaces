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

interface RouterDbInterface
{
    public function __construct(array $config = [], string $adapter = null, string $driver = null, string $format = null);

    public function run($database = null, array $options = []);
    public function ping($resource = null, $prefix = null, $other_base = null);

    public function setConfig(array $config = [], string $adapter = null, string $driver = null, string $format = null);
    public function getConfig();

    public function setOptions(array $options = []);
    public function getOptions();

    public function setDatabase($database = null);
    public function getDatabase();

    public function setNamespace(string $namespace = null);
    public function getNamespace();

    public function setAdapter(string $adapter = null);
    public function getAdapter();

    public function setDriver(string $driver = null);
    public function getDriver();

    public function setPrefix(string $prefix = null);
    public function getPrefix();

    //public function setMailer($mailer = null);
    //public function setLogger($logger = null);

}
 