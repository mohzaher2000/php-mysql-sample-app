<?php

/**
 * Configuration for database connection
 *
 */

$host       = "mysql.test-php-app.svc.cluster.local";
$username   = "root";
$password   = "root";
$dbname     = "test";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
