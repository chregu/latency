<?php

use Doctrine\ORM\Tools\Setup;

include ("vendor/autoload.php");

$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src/Chregu/Latency/Entities"), $isDevMode);

$conn = array(
'driver' => 'pdo_mysql',
'user'     => 'root',
'password' => '',
'dbname'   => 'latency',
);

$em = \Doctrine\ORM\EntityManager::create($conn, $config);
if ($isDevMode) {
 //   $em->getConfiguration()->setSQLLogger(new \Doctrine\DBAL\Logging\EchoSQLLogger());
}

