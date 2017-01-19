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
require_once CLASSES_DIR.'http.php'; // report http class
require_once CLASSES_DIR.'linkobject.php'; // report linkobject class

$http = new linkobject();