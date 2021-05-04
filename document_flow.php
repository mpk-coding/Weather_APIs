<?php
echo "<head><link rel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\"</head>";
$title = "document flow";
$heading = "<h1 class=\"title\">$title</h1>";

echo $heading;

echo "<hr>";

$variable = "thing";
$age = 21;

echo "<p>declaring if statements looks similar to js': </p>";
echo "<p>if ( condition ) {</p>";
echo "<blockquote>code here</blockquote>";
echo "<p>}</p>";

if (!$variable) {
    echo "<p>what is it?</p>";
} else {
    echo "<p>what is it not?</p>";
}

if ($age >= 18) {
    echo "<p>go on, lad</p>";
} else {
    echo "<p>quit yer whining!</p>";
}

echo "<hr>";

echo "<a href=\"\php\" class=\"link\">back</a>";
?>
<hr>
<h2 class="title__sub">regular html outside php</h2>