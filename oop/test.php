<?php

/**
 * Created by PhpStorm.
 * User: Joosep
 * Date: 11.01.2017
 * Time: 14:47
 */

//require a text class
require_once('text.php');
require_once('ctext.php');
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
echo '<hr>';
//create an object
$sentence2 = new text('Hello text by construct');
//control object output
echo '<pre>';
print_r($sentence2);
echo '</pre>';

$sentence2->show();

echo '<hr>';
//create an object
$sentence3 = new text('Hello color text');
//set object color
$sentence3->setColor('#FF0000');
//control object output
echo '<pre>';
print_r($sentence3);
echo '</pre>';

$sentence3->show();
?>