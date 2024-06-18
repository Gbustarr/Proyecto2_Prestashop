<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.sql_manager.configuration.sql_request_configuration' shared service.

return $this->services['prestashop.core.sql_manager.configuration.sql_request_configuration'] = new \PrestaShop\PrestaShop\Core\SqlManager\Configuration\SqlRequestConfiguration(($this->services['prestashop.core.command_bus'] ?? $this->load('getPrestashop_Core_CommandBusService.php')), ($this->services['prestashop.core.query_bus'] ?? $this->load('getPrestashop_Core_QueryBusService.php')));
