<?php
/**
 * Created by PhpStorm.
 * User: davidmcfall
 * Date: 6/22/17
 * Time: 6:02 PM
 */

// dont add a trailing / at the end
define('HTTP_SERVER', 'http://localhost');
// add slash / at the end
define('SITE_DIR', '/ACMTest-1/');

// database prefix if you use
define('DB_PREFIX', 'mp_');

define('DB_DRIVER', 'mysql');
define('DB_HOST', 'localhost');
define('DB_HOST_USERNAME', 'root');
define('DB_HOST_PASSWORD', '');
define('DB_DATABASE', 'bestrobotics');

define('SITE_NAME', 'ACM');

// define database tables
define('TABLE_PAGES', DB_PREFIX . 'pages');
define('USERS', DB_PREFIX . 'users');
define('TABLE_TAGLINE', DB_PREFIX . 'tagline');


define('D_TEMPLATE', 'template');