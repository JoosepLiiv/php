<?php

/**
 * Created by PhpStorm.
 * User: Joosep
 * Date: 18.01.2017
 * Time: 8:48
 */
//useful function for this class
function fixURL($val){
    return urlencode($val);
}
//only for testing
//import http class
require_once 'http.php';
//only for testing
class linkobject extends http
{//class begin
    //class variables
    var $baseUrl = false; //base Url
    var $protocol = 'http://'; //protocol for the URL - http
    var $delim = '&amp;'; // &html tag
    var $eq = '='; // = for element pairs
    // class methods
    // constructor
    // create base url: http://XXX.XXX.XXX.XXX/path_to_file.php
    function __construct()
    {
        parent::__construct();
        $this->baseUrl = $this->protocol.HTTP_HOST.SCRIPT_NAME;
    }// constructor
    // create http data pairs and merge them
    function addToLink(&$link, $name, $val){
        // if link is not empty - pair is created
        if($link != ''){
            $link .= $this->delim; // $link = $link.$this->delim;
        }
        // create pair: element_name=element_value
        $link = $link.fixUrl($name).$this->eq.fixUrl($val);
    }// addToLink
    // merge baseURL and link with data pairs
    function getLink($add = array()){
        $link = ''; //empty link
    }
}//class end