<?php
echo "<head><link rel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\"</head>";
$title = "variables";
$heading = "<h1 class=\"title\">$title</h1>";

echo $heading;

echo "<hr>";

echo "dis be an echo inside php tags, oi tests";

//  1
$var_string = "<p class=\"thing\">this is an html paragraph element as a value of a string variable named var in php</p>";

$string_1 = "first string";
$string_2 = "second string";
//  2
$var_number = 13;
$calculation = $var_number + 1 * 3 + $var_number;
//  3
$boolean = true;
//  4
$variableName = "var_string";
//  1
echo $var_string;

echo "<p>this is the $string_1</p><p>and this is the $string_2</p>";

echo "<p>" . $string_1 . "&nbsp;" . $string_2 . "&nbsp;are put together via concatenation through the use of \".\"</p>";
//  2
echo "<p>this is a result of a calculation in a variable on other numerical variables:" . " " . $calculation . "</p>";
//  3
echo "<p>this is an echoed boolean variable: " . $boolean . "</p>";
//  4
echo "<div class=\"group\">
          <p>this is an echoed variable with the value containing another variable's name: " . $$variableName . "</p>
        </div>";

echo "<hr>";

echo "<a href=\"\php\" class=\"link\">back</a>";
?>
<hr>
<h2 class="title__sub">regular html outside php</h2>