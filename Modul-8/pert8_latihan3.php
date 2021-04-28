<?php
function repeat($text, $num = 10)
{
    echo "<ol>\r\n";
    for ($i = 0; $i < $num; $i++) {
        echo "<li>$text </li>\r\n";
    }
    echo "</ol>";
}
// calling repeat with two arguments
repeat("I'm the best", 15);
// calling repeat with just one argument
repeat("You're the man");
