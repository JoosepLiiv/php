<?php

/**
 * Created by PhpStorm.
 * User: Joosep
 * Date: 17.01.2017
 * Time: 12:51
 */
function fixHtml($val){
    return htmlentities($val);
}
class http
{
    var $server = array(); // server data
    var $vars = array(); // http data
    var $cookie = array(); //cookies data

    function __construct()
    {
        $this->init();
        $this->initConst();
    }

    // initializing
    function init(){
        $this->server = $_SERVER;
        $this->cookie = $_COOKIE;
        $this->vars = array_merge($_GET,$_POST,$_FILES);
    }

    function initConst(){
        $vars = array('REMOTE_ADDR','PHP_SELF','SCRIPT_NAME','HTTP_HOST');
        foreach ($vars as $var){
            if(!defined($var) and isset($this->server[$var])){
                define($var, $this->server[$var]);
            }
        }
    }
    //set up data for http object
    function set($name, $val){
        $this->vars[$name] = $val;
    }//set
    //
    function get($name,$fix = true){
        if(isset($this->vars[$name])){
            if ($fix){
                return fixHtml($this->vars[$name]);
            }
            return $this->vars[$name];
        }
        return false;
    } // get

    //delete http data element
    function del($name){
        if(isset($this->vars[$name])){
            unset($this->vars[$name]);
        }
    }
}