<?php
$i = 0;
echo 'This code will run at least once because i default value is 0.<br>';
do {
echo 'i value is ' . $i . ', so code block will run. <br>';
++$i;
} while ($i< 10);
