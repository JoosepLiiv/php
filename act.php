<?php
/**
 * Created by PhpStorm.
 * User: Joosep
 * Date: 18.01.2017
 * Time: 14:27
 */
$act = $http->get('act');
echo 'act value = '.$act.'<br />';

$fn = ACTS_DIR.str_replace('.', '/', $act).'.php';
//control act file
if(file_exists($fn) and is_file($fn) and is_readable($fn)){
    require_once $fn;
} else {
    // if file is not there

}