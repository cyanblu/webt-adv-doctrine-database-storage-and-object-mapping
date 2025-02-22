<?php
// bootstrap.php
namespace Htlw3r\DoctrineOrm;
use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

require_once __DIR__.'/vendor/autoload.php';

// Create a simple "default" Doctrine ORM configuration for Attributes
$config = ORMSetup::createAttributeMetadataConfiguration(
    paths: array( __DIR__ . './src/Model'),
    isDevMode: true
);

// Configuring the database connection
$connection = DriverManager::getConnection([
    'driver' => 'pdo_sqlite',
    'path' => __DIR__ . '/db.sqlite',
], $config);

// Obtaining the entity manager
$entityManager = new EntityManager($connection, $config);