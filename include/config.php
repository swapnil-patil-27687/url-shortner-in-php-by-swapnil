<?php

/**
 * constants for Dev environment to conect the database
 */
if (!defined('MYSQL_DSN')) define('MYSQL_DSN', 'mysql:host="Your Local host name here";dbname="Your database name here"');
if (!defined('MYSQL_USER')) define('MYSQL_USER', 'Your database name');
if (!defined('MYSQL_PASSWORD')) define('MYSQL_PASSWORD', 'Your database password');

define("SHORTURL_PREFIX", "http://url-shortner-in-php-by-swapnil:81/redirect.php?c=");
