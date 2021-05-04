<?php
echo "<head><link rel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\"</head>";
$title = "sending emails with php ";
$heading = "<h1 class=\"title\">$title</h1>";

echo $heading;

echo "<hr>";

echo "<p>";
echo "To send an email with PHP: ";
echo "</p>";

echo "<p>";
echo "\$emailTo = \"email@domain.com\"";
echo "</p>";

echo "<p>";
echo "\$subject = \"Email topic\"";
echo "</p>";

echo "<p>";
echo "\$body = \"The mail's content\"";
echo "</p>";

echo "<p>";
echo "\$headers = \"From: sender@domain.com\"";
echo "</p>";

echo "<hr>";

echo "<p>";
echo "if (mail(\$emailTo, \$subject, \$body, \$headers)) {";
echo "</p>";

echo "<blockquote>";
echo "echo \"The email was sent successfully\"";
echo "</blockquote>";

echo "<p>";
echo "} else {";
echo "</p>";

echo "<blockquote>";
echo "echo \"The email could not be sent.\"";
echo "</blockquote>";

echo "<p>";
echo "}";
echo "</p>";

echo "<hr>";

echo "<a href=\"\php\" class=\"link\">back</a>";

echo "<hr>";
?>
<h2 class="title__sub">regular html outside php</h2>