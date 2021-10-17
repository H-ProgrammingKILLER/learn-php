<?php 
//variable scope
/*
    local
    global
    static
*/

$x = 10; //global

function test(){
    $y = 10; //local 
    global $x;//global to local
    //$GLOBALS['x'] = $GLOBALS['x'] + $y;
    return $x + $y;
}

function myTest(){
    static $c = 10;
    echo $c;
    $c++;
}
myTest();
myTest();
myTest();
?>