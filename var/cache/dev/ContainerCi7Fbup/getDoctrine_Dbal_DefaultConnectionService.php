<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'doctrine.dbal.default_connection' shared service.

include_once $this->targetDirs[3].'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Driver\\Connection.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Connection.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Configuration.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Logging\\LoggerChain.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\doctrine-bridge\\Logger\\DbalLogger.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\event-manager\\lib\\Doctrine\\Common\\EventManager.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\doctrine-bridge\\ContainerAwareEventManager.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\AttachEntityListenersListener.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle\\ConnectionFactory.php';

$a = new \Doctrine\DBAL\Configuration();
$b = new \Doctrine\DBAL\Logging\LoggerChain();
$b->addLogger(new \Symfony\Bridge\Doctrine\Logger\DbalLogger(($this->privates['logger'] ?? $this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger()), ($this->privates['debug.stopwatch'] ?? $this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
$b->addLogger(($this->privates['doctrine.dbal.logger.profiling.default'] ?? $this->privates['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack()));

$a->setSQLLogger($b);

$c = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
$c->addEventListener(array(0 => 'loadClassMetadata'), new \Doctrine\ORM\Tools\AttachEntityListenersListener());

return $this->services['doctrine.dbal.default_connection'] = (new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array()))->createConnection(array('driver' => 'pdo_mysql', 'charset' => 'utf8mb4', 'url' => $this->getEnv('resolve:DATABASE_URL'), 'host' => 'localhost', 'port' => NULL, 'user' => 'root', 'password' => NULL, 'driverOptions' => array(), 'serverVersion' => '5.7', 'defaultTableOptions' => array('charset' => 'utf8mb4', 'collate' => 'utf8mb4_unicode_ci')), $a, $c, array());
