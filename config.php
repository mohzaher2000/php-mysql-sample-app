<?php

/**
 * Configuration for database connection
 *
 */

$host       = "172.30.3.118";
$username   = "app-user";
$password   = "R3dH@t123";
$dbname     = "test";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
