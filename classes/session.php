<?php

/**
 * Created by PhpStorm.
 * User: Joosep
 * Date: 26.01.2017
 * Time: 14:34
 */
class session
{ // class begin
    // variables
    var $sid = false;
    var $vars = false;
    var $http = false;
    var $db = false;
    var $anonymous = true;
    var $timeout = 1800;

    // class methods
    //constructor
    function __construct(&$http, &$db)
    {
        $this->http = &$http;
        $this->db = &$db;
        $this->sid = $http->get('sid');
    }
    // constructor
} // class end