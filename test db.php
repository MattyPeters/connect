<?php
/**
 * MySQL connection check
 *
 * Checks the connection to the local install of MySQL
 *
 * The sample code is based on development by previous WDA staff teaching WDA.
 * @author Donal Ellis <donal.ellis@rmit.edu.au>
 * @version 1.0
 * @package Connect
 */

/**
 * Hostname and port mysql is running on (can't use localhost)
 */
define('DB_HOST',   'goanna.cs.rmit.edu.au:52247');
/**
 * Name of database to connect to
 */
define('DB_NAME',   'winestore');
/**
 * Username to connect with
 */
define('DB_USER',   'winestore');

/**
 * Password to connect with
 */
define('DB_PW',     'secret');
?>
