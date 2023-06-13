<?php

namespace Htlw3r\DoctrineOrm\bin;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/Fixtures/UserDataLoader.php';
use Doctrine\Common\DataFixtures\Loader;
use Htlw3r\DoctrineOrm\Fixtures\UserDataLoader;
use Doctrine\Common\DataFixtures\Executor\ORMExecutor;
use Doctrine\Common\DataFixtures\Purger\ORMPurger;

require 'bootstrap.php';

$loader = new Loader();
$loader->addFixture(new UserDataLoader());
$executor = new ORMExecutor($entityManager, new ORMPurger());
$executor->execute($loader->getFixtures());