<?php
/**
 * Created by PhpStorm.
 * User: Joosep
 * Date: 19.01.2017
 * Time: 12:19
 */
// configuration
// create and template object
define('CLASSES_DIR', 'classes/');
define('TMPL_DIR', 'tmpl/');
define('STYLE_DIR','css/');
define('ACTS_DIR', 'acts/'); // acts
define('DEFAULT_ACT', 'default'); // default act or location

require_once CLASSES_DIR.'template.php'; // import template class
require_once CLASSES_DIR.'http.php'; // import http class
require_once CLASSES_DIR.'linkobject.php'; // import linkobject class
require_once CLASSES_DIR.'mysql.php'; // import mysql class

require_once 'dbconf.php'; // import database configuration

$http = new linkobject();
// create database connection object
$db = new mysql('localhost','user','pw','db')