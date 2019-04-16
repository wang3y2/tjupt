<?php
define('IN_TRACKER', true);
define("PROJECTNAME", "NexusPHP");
define("NEXUSPHPURL", "http://www.nexusphp.com");
define("NEXUSWIKIURL", "http://www.nexusphp.com/wiki");
define("VERSION", "Powered by <a href=\"aboutnexus.php\">" . PROJECTNAME . "</a>");
define("THISTRACKER", "General");
$showversion = " - Powered by " . PROJECTNAME;
$rootpath = realpath(dirname(__FILE__) . '/..');
//echo $rootpath;exit;
set_include_path(get_include_path() . PATH_SEPARATOR . $rootpath);
$rootpath .= "/";
require_once($rootpath . 'mysqli_wrapper/mysql.php');
include($rootpath . 'include/core.php');
include_once($rootpath . 'include/functions.php');
include_once($rootpath . 'include/database/database.inc');
