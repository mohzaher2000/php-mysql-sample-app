<?php

/**
 * Configuration for database connection
 *
 */

$host       = "172.30.180.164";
$username   = "userFUP";
$password   = "XNICm1qxDixBvMHE";
$dbname     = "test";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
