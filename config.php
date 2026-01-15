<?php

/**
 * Configuration for database connection
 *
 */

$host       = "php-db-svc.php-app.svc.cluster.local";
$username   = "user";
$password   = "redhat123";
$dbname     = "test";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
