<?php

/**
 * Created by PhpStorm.
 * User: Joosep
 * Date: 11.01.2017
 * Time: 14:47
 */

//require a text class
require_once('text.php');
//create an object
$sentence = new text();
echo '<pre>';
print_r($sentence);
echo'</pre>';

$sentence->setText('Hello text object.');
echo '<pre>';
print_r($sentence);
echo'</pre>';
//show string output
$sentence->show();
?>