<?php

/**
 * Created by PhpStorm.
 * User: Joosep
 * Date: 18.01.2017
 * Time: 8:48
 */
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
}//class end