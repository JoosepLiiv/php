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
// main menu content query

$sql = "select content_id, title FROM content where parent_id='0' and show_in_menu='1' order by sort ASC;";
//get menu data from database
$res = $db->getArray($sql);
//create menu items from query result
if($res != false){
    foreach($res as $page){
        //add content to menu item
        $item->set('name',$page['title']);
        $link = $http->getLink(array('page_id'=>$page['content_id']));
        $item->set('link',$link);
        //add item to menu
        $menu->add('items', $item->parse());
    }
}

$tmpl->set('menu',$menu->parse());

// menu item creation - begin
// add pairs of item temlate element names and real values
$item->set('name', 'Esimene leht');
$link = $http->getLink(array('act'=>'first'));
$item->set('link', $link);
// output menu
echo $menu->parse();
