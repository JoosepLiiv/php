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

    //create session
    function createSession($user = false){
        // anonymous session
        if($user == false){
           $user = array(
               'user_id' => 0,
               'role_id' => 0,
               'username' => 'Anonymous'
           );
    }
    // create session if number
        $sid = md5(uniqid(time().mt_rand(1,1000), true));
        // insert data to database
        $sql = 'INSERT INTO session SET'.
            'sid='.fixDb($sid).', '.
            'user_id='.fixDb($user['user_id']).', '.
            'user_data='.fixDb(serialize($user)).', '.
            'login_ip='.fixDb(REMOTE_ADDR).', '.
            'created=NOW()';
        $this->db->query($sql);
        // setup session id number
        $his->sid = $sid;
        $this->http->set('sid', $sid);
    } //createSession
} // class end