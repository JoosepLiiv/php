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
// output act file path
echo $fn.'<br />';