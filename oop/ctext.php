<?php

/**
 * Created by PhpStorm.
 * User: Joosep
 * Date: 11.01.2017
 * Time: 15:15
 */
require_once ('text.php');
class ctext extends text
{ //class begin
    var $color = false;
    //methods
    //set color
    function setColor($c){
        $this->color = $c;
    }//set color
    //show color text
    function show()
    {
        if ($this->color === false) {
            parent::show(); // use text class show function
        } else {
            echo '<font color="' . $this->color . '">' . $this->str . '</font><br>';
        }
    }
} //class end