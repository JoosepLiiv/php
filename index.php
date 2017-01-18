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
require_once CLASSES_DIR.'template.php';
// and use it
// create an template object,
// load template file content
$tmpl = new template('main.html');
// add pairs of template element names and real values
$tmpl->set('menu','minu menüü');
$tmpl->set('nav_bar','minu navigatsioon');
$tmpl->set('lang_bar','minu keeleriba');
$tmpl->set('content','minu sisu');
// control the content of template object
echo '<pre>';
print_r($tmpl);
echo '</pre> ';

echo $tmpl->parse();
echo '<br>';

require_once CLASSES_DIR.'http.php';
require_once CLASSES_DIR.'linkobject.php';
$http = new linkobject();

echo '<pre>';
print_r($http);
echo '</pre>';
// control linkobject pair creation
$link = ''; //empty link for data pairs
$link = $http->getLink(array('kasutaja'=>'user','parool'=>'qwerty'));
echo $link;
?>