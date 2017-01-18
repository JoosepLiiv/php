<?php
/**
 * Created by PhpStorm.
 * User: Joosep
 * Date: 12.01.2017
 * Time: 13:19
 */

// create and template object
define('CLASSES_DIR', 'classes/');
define('TMPL_DIR', 'tmpl/');
define('STYLE_DIR','css/');
define('ACTS_DIR', 'acts/'); // acts
require_once CLASSES_DIR.'template.php';
// and use it
// create an template object,
// load template file content
$tmpl = new template('main.html');
// add pairs of template element names and real values
require_once CLASSES_DIR.'http.php';
require_once CLASSES_DIR.'linkobject.php';
$http = new linkobject();
require_once 'menu.php';
$tmpl->set('menu',$menu->parse());
$tmpl->set('nav_bar','minu navigatsioon');
$tmpl->set('lang_bar','minu keeleriba');
$tmpl->set('content','minu sisu');
// control the content of template object
echo '<pre>';
print_r($tmpl);
echo '</pre> ';

echo $tmpl->parse();
echo '<br>';



echo '<pre>';
print_r($http);
echo '</pre>';
// control linkobject pair creation
$link = ''; //empty link for data pairs
$link = $http->getLink(array('kasutaja'=>'user','parool'=>'qwerty'));
echo $link;

echo '<pre>';
print_r($http);
echo '</pre>';

echo $http->get('act');



?>