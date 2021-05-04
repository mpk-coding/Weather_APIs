<?php
echo "<head><link rel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\"</head>";
$title = "SCOPE";
$heading = "<h1 class=\"title\">$title</h1>";

echo $heading;

echo "<hr>";
?>
GLOBAL DECLARATIONS<br>
var $myAvengers = array(“Thor”, “Batman”, “Supermen”, “Santa”);<br><br>

function myAvengers() {<br><br>

$names = array(“Thor”, “Batman”, “Supermen”, “Santa”);<br>
return $names;<br>
}<br><br>

function avengerCheck($lookFor) {<br><br>

GET THE GLOBAL<br>
global $myAvengers;<br><br>

COPY GLOBAL LOCALLY<br>
$new1 = $myAvengers;<br>
$new2 = myAvengers();<br><br>

EXECUTE ON LOCAL COPIES<br>
$new1[] = “marek”;<br>
$new2[] = “pudel”;<br><br>

EXECUTE ON GLOBAL ORIGINAL<br>
$myAvengers[] = “marcin”;<br><br>

GLOBAL, LOCAL,LOCAL, GLOBAL<br>
var_dump($myAvengers, $new1, $new2, myAvengers());<br>
}<br>
<?php

echo "<hr>";

echo "<a href=\"\php\" class=\"link\">back</a>";

echo "<hr>";
?>