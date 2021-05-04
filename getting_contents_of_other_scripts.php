<?php
echo "<head><link rel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\"</head>";
$title = "Getting contents of other scripts";
$heading = "<h1 class=\"title\">$title</h1>";

echo $heading;

echo "<hr>";

echo "<p>";
echo "Run a script via: ";
echo "</p>";

echo "<p>";
echo "includes \"/path.php\"";
echo "</p>";

echo "<hr>";

include "includes/php/include.php";

echo "<hr>";

//or
echo "<p>";
echo "get HTML content via: ";
echo "</p>";

echo "<p>";
echo "echo file_get_contents(\"path.file\")";
echo "</p>";

echo "<hr>";

echo "<a href=\"\php\" class=\"link\">back</a>";

echo "<hr>";