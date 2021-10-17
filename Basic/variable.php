<?php
    $my_name = "Haisb";
    print "<h1>$my_name</h1>";
    //varible scope

/*
    PHP Variables Scope
    In PHP, variables can be declared anywhere in the script.

    The scope of a variable is the part of the script where the variable can be referenced/used.

    PHP has three different variable scopes:

    local
    global
    static
*/
$x = 5; // global scope

function myTest() {
// using x inside this function will generate an error
echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";
function myTests() {
    $x = 5; // local scope
    echo "<p>Variable x inside function is: $x</p>";
}
myTests();
  
// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";
$xes = 5;
$yes = 10;

function myTestes() {
    global $xes, $yes;
    $y = $xes + $yes;
}

myTestes();
echo $y; // outputs 15
function myTest() {
    static $x = 0;
    echo $x;
    $x++;
  }
  
  myTest();
  myTest();
  myTest();
?>