<?php
/**
 * Created by PhpStorm.
 * User: Joosep
 * Date: 26.01.2017
 * Time: 14:52
 */
// useful function for sql queries
function fixDb($val){
    return '"'.addslashes($val).'"';
}