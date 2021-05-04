<?php
echo "<head><link rel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\"</head>";
$title = "arrays";
$heading = "<h1 class=\"title\">$title</h1>";

echo $heading;

echo "<hr>";
echo "<p>create an array assigned to a variable with array(), </p>";
$array = array(
    "content_1",
    "content_2",
    "content_3",
    "content_4");

echo "<p>display said array in a readable form with print_r(): </p>";
print_r($array);

echo "<hr>";
echo "<p>display explicit items of an array with \$array[x]: </p>";
echo $array[2];

echo "<hr>";
echo "<p>create an array by declaring explicit items with \$array[x] = \"something\": </p>";
$otherArray[0] = "otherContent_1";
$otherArray[1] = "otherContent_2";

print_r($otherArray);

echo "<hr>";

echo "<p>arrays can have custom named indexes, effectively working as key = value: </p>";
$associativeArray = array(
    "key_0" => "value_0",
    "key_1" => "value_1",
    "key_2" => "value_2",
);

echo "<p>associativeArray: ";
print_r($associativeArray);
echo "</p>";

echo "<hr>";

echo "<p>get the length of an array using sizeof():</p>";
echo "<p>associativeArray's length is: " . sizeof($associativeArray) . "</p>";

echo "<hr>";

echo "<p>delete an item in an array or a variable using unset(): </p>";

unset($associativeArray["key_1"]);

echo "<p>associativeArray: ";
print_r($associativeArray);
echo "</p>";

echo "<p>associativeArray's length is: " . sizeof($associativeArray) . "</p>";

echo "<hr>";

echo "<a href=\"\php\" class=\"link\">back</a>";
?>
<hr>
<h2 class="title__sub">regular html outside php</h2>