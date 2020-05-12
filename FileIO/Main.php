<?php
$filename = "data";
$file = fopen($filename, 'r');

if(!$file) {
    echo "Something went wrong!";
    exit();
}
$filesize = filesize($filename);
$filetext = fread($file, $filesize);

fclose($file);

echo "File name: $filename\n";
echo "File size: $filesize\n";
echo "File content: $filetext\n";
