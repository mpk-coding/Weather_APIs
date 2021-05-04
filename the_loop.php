<?php
echo "<head><link rel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\"</head>";
$title = "\"the loop\"";
$heading = "<h1 class=\"title\">$title</h1>";

echo $heading;

echo "<hr>";

$array = array(
    "content_1",
    "content_2",
    "an odd, third one",
    "content_4",
    "fifth element",
    "and so on six times",
);

echo "<p>declaring a loop looks just like in js: </p>";

echo "<p>for (\$i = 0; \$i < 10; \$i++) {</p>";

echo "<blockquote>code here</blockquote>";
echo "<blockquote> echo \$i.\"&lt;br&gt;\";";
echo "<p>will display each \$i variable's value separated by line breaks</p>";
echo "</blockquote>";
echo "<p>}</p>";

echo "<hr>";

echo "<p>a loop, looping through 30 numbers and displaying the even ones,</p>";
echo "<p>like below: </p>";

for ($i = 0; $i <= 30; $i++) {
    if ($i % 2 == 0) {
        echo $i . "<br>";
    }
}

echo "<hr>";

echo "<p>a loop counting down from 10 to 0 </p>";

for ($i = 10; $i >= 0; $i--) {
    echo $i . "<br>";
}

echo "<hr>";

echo "<p>a loop displaying contents of an array: </p>";

echo "<p>the array contains " . sizeof($array) . " items</p>";

for ($i = 0; $i < sizeof($array); $i++) {
    echo "<p>" . $array[$i] . "</p>";
}

echo "<hr>";

echo "<p>foreach() loop: </p>";

echo "<p>foreach(\$array as \$key => \$value) {</p>";

echo "<blockquote>";
echo "//does not add immediately, but will show up on further calls<br>";
echo "echo \$array[\$key] = \$value . \" + unique, &lt;span&gt;numeration via JS&lt;/span&gt; string added to each value\";<br>";
echo "//unless called as \$array[\$key] it seems";
echo "<p>Array item, index \" . \$key . \"  =  \" . \$array[\$key] . \"</p>";
echo "</blockquote>";

echo "<p>}</p>";

echo "<p>echoes: </p>";

foreach ($array as $key => $value) {
    //does not add immediately, but will show up on further calls
    $array[$key] = $value . " + unique, <span class=\"counterSpan\"></span> string added to each value";
    //unless called as $array[$key] it seems
    echo "<p>Array item, index " . $key . " = " . $array[$key] . "</p>";
}

echo "<hr>";

echo "<p>the while looop:</p>";

echo "<p>set up a variable outside the scope of the function</p>";
echo "<p>\$i = 0;</p>";
echo "<p>execute the function</p>";
echo "<p>while (\$i < 10) {</p>";
echo "<blockquote>echo \"\$.&lt;br&gt;\";";
echo "</blockquote>";
echo "<p>}</p>";
echo "<p>outputs:</p>";

$x = 0;

while ($x < 10) {
    echo "<p>$x</p>";

    $x++;
}

echo "<hr>";

echo "<p>create an array where each item is a 5 multiplier:</p>";
echo "<p>for (\$i = 1; \$i <= 10; \$i++) {</p>";
echo "<blockquote>\$timesFive[\$i] = \$i * 5;</blockquote>";
echo "<p>}</p>";

for ($i = 1; $i <= 10; $i++) {
    $timesFive[$i] = $i * 5;
}

$z = 0;

echo "<p>execute a while loop to display the array:</p>";
echo "<p>\$z = 0;</p>";
echo "<p>while (\$z < sizeof(\$timesFive)) {<p>";
echo "<blockquote><p>echo \"&lt;p&gt;\$timesFive[\$z]&lt;/p&gt;\"</p>";
echo "<p>\$z++;</p>";
echo "</blockquote>}";
echo "<p>outputs:</p>";

while ($z <= sizeof($timesFive)) {
    echo "<p>$timesFive[$z]</p>";
    $z++;
}

echo "<p>or:</p>";
echo "<p>\$c = 1;<p>";
echo "<p>and:</p>";
echo "<p>while (\$c <= 5) {<p>";
echo "<blockquote>";
echo "<p>\$mb5 = \$c * 5;</p>";
echo "<p>echo \"&lt;p&gt;\$mb5&lt;p&gt;\";</p>";
echo "<p>\$c++;</p>";
echo "</blockquote>";
echo "<p>}</p>";
echo "<p>outputs:</p>";

$c = 1;

while ($c <= 5) {
    $mb5 = $c * 5;
    echo "<p>$mb5</p>";
    $c++;
}

echo "<hr>";

echo "<a href=\"\php\" class=\"link\">back</a>";

echo "<hr>";
?>
<h2 class="title__sub">regular html outside php</h2>

<script type="text/javascript">
function loaded() {
  var counterArray = document.getElementsByClassName("counterSpan");

  counterArray[0].innerHTML = 1 + "st";
  counterArray[1].innerHTML = 2 + "nd";
  counterArray[2].innerHTML = 3 + "rd";
  counterArray[3].innerHTML = 4 + "th";

  i = 3;

  for (i > 3; i < counterArray.length; i++) {
    var counter = i + 1;
    counterArray[i].innerHTML = counter + "th";
  }
}
window.onload = loaded();
</script>