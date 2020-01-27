<?php

/**
 * Configuration for database connection
 *
 */

$host       = "172.31.36.52";
$username   = "root03";
$password   = "root03";
$dbname     = "test";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
