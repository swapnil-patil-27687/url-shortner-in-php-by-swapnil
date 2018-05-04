<?php

/**
 * constants for Dev environment
 */
if (!defined('MYSQL_DSN')) define('MYSQL_DSN', 'mysql:host=localhost;dbname=fluentdb');
if (!defined('MYSQL_USER')) define('MYSQL_USER', 'root');
if (!defined('MYSQL_PASSWORD')) define('MYSQL_PASSWORD', '');

define("SHORTURL_PREFIX", "http://url-shortner-in-php-by-swapnil:81/redirect.php?c=");
