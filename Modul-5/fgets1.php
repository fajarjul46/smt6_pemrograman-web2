<?php
$file = fopen("test1.txt","r");
echo fgets($file);
fclose($file);
