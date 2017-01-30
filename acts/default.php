<?php
/**
 * Created by PhpStorm.
 * User: Joosep
 * Date: 18.01.2017
 * Time: 15:14
 */
$page_id = $http->get('page_id'); //get page id from url
//get page content from fb according to page_id
$sql = 'SELECT * FROM content where content_id="'.$page_id.'"';
// query to db
$res = $db->getArray($sql);
// if query has result
if($res !== FALSE){
    // control result test output
    $page = $res[0];
    $http->set('content', $page['content']);
}
?>
