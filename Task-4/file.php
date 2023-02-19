<?php
// Writing to file
$file = fopen("example.txt", "w");
fwrite($file, "Md Fahim Alam 20-42517-1");
fclose($file);

// Reading from file
$file = fopen("example.txt", "r");
$content = fread($file, filesize("example.txt"));
fclose($file);

// Displaying content in the browser
echo $content;
