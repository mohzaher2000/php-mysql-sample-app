<?php

/**
 * Configuration for database connection
 *
 */

$host       = "mariadb.final-app.svc.cluster.local";
$username   = "app-user";
$password   = "R3dH@t123";
$dbname     = "test";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
