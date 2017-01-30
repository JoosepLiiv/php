<?php
/**
 * Created by PhpStorm.
 * User: Joosep
 * Date: 12.01.2017
 * Time: 13:19
 */
// import configuration
require_once 'conf.php';
// create an template object,
// set up the file name for template
// load template file content
$tmpl = new template('main');
// add pairs of temlate element names and real values
$tmpl->set('style', STYLE_DIR.'main'.'.css');
$tmpl->set('header', 'minu lehe pealkiri');
// create and output menu
// import menu file
require_once 'menu.php'; // in this file is menu creation
// import act file
require_once 'act.php';
$tmpl->set('menu', $menu->parse());
//$tmpl->set('nav_bar', 'minu navigatsioon');
$tmpl->set('lang_bar', 'minu keeleriba');
// allow to use default act
//$tmpl->set('content', $http->get('content'));
// output template content set up with real values

//using session data
$tmpl->set('nav_bar', $sess->user_data['username']);

echo $tmpl->parse();

// control actions
// control database object
// create test query
$sql = 'SELECT NOW();';
$res = $db->getArray($sql);
$sql = 'SELECT NOW();';
$res = $db->getArray($sql);
$sql = 'SELECT NOW();';
$res = $db->getArray($sql);

// if page is changed, keep sid same
$sess->flush();
// control database query result
echo '<pre>';
print_r($res);
echo '</pre>';
// query time control
$db->showHistory();
// control session output
$sess->flush();
echo '<pre>';
print_r($sess);
echo '</pre>';
?>