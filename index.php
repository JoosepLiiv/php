<?php
/**
 * Created by PhpStorm.
 * User: Joosep
 * Date: 12.01.2017
 * Time: 13:19
 */
// import configuration file
require_once 'conf.php';
// create an template object,
// load template file content
$tmpl = new template('main.html');
// add pairs of template element names and real values
require_once 'menu.php';
$tmpl->set('menu',$menu->parse());
$tmpl->set('nav_bar','minu navigatsioon');
$tmpl->set('lang_bar','minu keeleriba');
//$tmpl->set('content','minu sisu');
//allow to use default act
$tmpl->set('content',$http->get('content'));
// control the content of template object
//echo '<pre>';
//print_r($tmpl);
//echo '</pre> ';

echo $tmpl->parse();
echo '<br>';


//
//echo '<pre>';
//print_r($http);
//echo '</pre>';
// control linkobject pair creation
$link = ''; //empty link for data pairs
$link = $http->getLink(array('kasutaja'=>'user','parool'=>'qwerty'));
echo $link.'<br>';

//echo '<pre>';
//print_r($http);
//echo '</pre>';

require_once 'act.php';
echo '<br><br>';

$sql = 'SELECT NOW();';
$res = $db->getArray($sql);

echo '<pre>';
print_r($res);
echo '</pre>';

$db->showHistory();

//control session output
echo '<pre>';
print_r($sess);
echo '</pre>';
?>