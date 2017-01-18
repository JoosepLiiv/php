<?php
/**
 * Created by PhpStorm.
 * User: Joosep
 * Date: 18.01.2017
 * Time: 10:34
 */
// menu.php - create page menu
// create menu template objects
// for menu and menu items
$menu = new template('menu.menu'); // in menu directory is file menu.html - menu/menu.html;
$item = new template('menu.item');
// Menu item creation - begin
// add pairs of template elements and their real values
$item->set('name','Esimene leht');
$link = $http->getLink(array('page'=>'first'));
$item->set('link',$link);
// control created item output
echo '<pre>';
print_r($item);
echo '</pre>';
// add menu items to menu
$menu->set('items',$item->parse());

$item->set('name','Teine leht');
$link = $http->getLink(array('page'=>'teine'));
$item->set('link',$link);
// control created item output
echo '<pre>';
print_r($item);
echo '</pre>';
// add menu items to menu
$menu->set('items',$item->parse());
// Menu item creation - end
// control created menu output
echo '<pre>';
print_r($menu);
echo '</pre>';
// output menu
echo $menu->parse();
