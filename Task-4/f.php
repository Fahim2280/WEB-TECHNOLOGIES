<?php
$file = fopen("example.txt", "w");
fwrite($file, "Md Fahim Alam 20-42517-1");
fclose($file);

$file = fopen("example.txt", "r");
$content = fread($file, filesize("example.txt"));
fclose($file);

echo $content;
?>