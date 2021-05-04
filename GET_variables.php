<?php
echo "<head><link rel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\"</head>";
$title = "GET variables";
$heading = "<h1 class=\"title\">$title</h1>";

echo $heading;

echo "<hr>";

echo "<p>contained in an array:</p>";
echo "<p>\$_GET</p>";

echo "<hr>";

echo "<a href=\"\php\" class=\"link\">back</a>";

echo "<hr>";
?>
<h2 class="title__sub">regular html outside php</h2>

<h3>Yer credentials</h3>
<form>
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="input_1_name_attr"><br><br>
  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="input_2_name_attr"><br><br>
  <input type="submit" value="Submit">
</form>

<?php
echo "<p>Hai, " . "<span class=\"capitalise\">" . $_GET["input_1_name_attr"] . "</span>" . "</p>";
?>