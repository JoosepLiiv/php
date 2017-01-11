<?php

/**
 * Created by PhpStorm.
 * User: Joosep
 * Date: 11.01.2017
 * Time: 14:23
 */
class text
{
    //text class begin
        var $str = '';

        //constructor
        function __construct($s='')
        {
            $this->setText($s);
        }

    //methods
        function setText($s){
            $this->str = $s;
        }

        function show(){
            echo $this->str.'<br>';
        }
    //text class end
}