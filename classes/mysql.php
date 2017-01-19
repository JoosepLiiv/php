<?php

/**
 * Created by PhpStorm.
 * User: Joosep
 * Date: 19.01.2017
 * Time: 12:32
 */
class mysql
{ // class begin
    // class variables
    var $conn = false; // connection to database server
    var $host = false; // database server name / ip
    var $user = false; // database sever user
    var $pass = false; // database server password
    var $dbname = false; // database server user database
    // class methods
    // constructor
    function __construct($h ,$u ,$p ,$dn)
    {
        $this->host = $h;
        $this->user = $u;
        $this->pass = $p;
        $this->dbname = $dn;
        $this->connect();
    }// construct
    // connect to database server and use database
    function connect(){
        $this->conn = mysqli_connect($this->host,$this->user,$this->pass,$this->dbname);
        if (!$this->conn){
            echo 'Probleem andmebaasi ühendamisega<br>';
            exit;
        }
    }
    // query to database
    function query($sql){
        $res = mysqli_query($this->conn,$sql);
        if(!$res === FALSE){
        echo 'Viga päringus <b>'.$sql.'</b></br>';
        echo mysqli_error($this->conn).'<br>';
        }
        return $res;
    }//query
    // query data result
    function getArray($sql){
        $res = $this->query($sql);
        $data = array();
        while($record = mysqli_fetch_assoc($res)){
            $data[] = $record;
        }
        if(count($data) == 0){
            return false;
        }
        return $data;
    } // get array
} // class end