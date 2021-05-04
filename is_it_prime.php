<?php
echo "<head><link rel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\"</head>";
$title = "is it prime?";
$heading = "<h1 class=\"title\">$title</h1>";

echo $heading;

echo "<hr>";

echo "<form class=\"primeForm\">
<label for=\"numberInput\">Type in your number</label>
<input id=\"numberInput\" type=\"number\" name=\"number\">
</form>";

function primeCheck($number)
{
    if ($number == 1) {
        return "not prime";
    }
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            return "not prime";
        }
    }
    return "prime";
}

echo "<p>" . $_GET["number"] . "</p>";

echo primeCheck($_GET["number"]);
echo "<hr>";

echo "<a href=\"\php\" class=\"link\">back</a>";

echo "<hr>";
?>
<h2 class="title__sub">regular html outside php</h2>