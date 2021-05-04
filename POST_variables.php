<?php
echo "<head><link rel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\"</head>";
$title = "POST variables?";
$heading = "<h1 class=\"title\">$title</h1>";

$checkThis = array("Tony", "Peter", "Thor", "Steve");

print_r($checkThis);

echo $heading;

echo "<hr>";

echo "<form class=\"primeForm\" method=\"post\">
<label for=\"numberInput\">Are you an avenger?<br>Type in your name!</label>
<input id=\"numberInput\" type=\"text\" name=\"name\">
</form>";
$nameInput = $_POST["name"];

function avengerCheck($lookFor, $inArray)
{
    if (in_array($lookFor, $inArray)) {
        return "Avenger!";
    } else {
        return "Shoo! Make room for real heroes!";
    }
}

echo "<p>" . $nameInput . " was your entry!</p>";

echo "<p>" . avengerCheck($nameInput, $checkThis) . "</p>";
echo "<hr>";

echo "<a href=\"\php\" class=\"link\">back</a>";

echo "<hr>";
?>
<h2 class="title__sub">regular html outside php</h2>