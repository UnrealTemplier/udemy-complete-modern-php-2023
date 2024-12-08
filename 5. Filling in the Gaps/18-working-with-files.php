<?php

// get directory content list
$directoryList = scandir(__DIR__);
echo "<pre>";
print_r($directoryList);
echo "<pre>";

if (!file_exists("foo")) {
    // create a directory
    mkdir("foo");
}

if (file_exists("foo")) {
    // remove a directory
    rmdir("foo");
}

if (!file_exists("example.txt")) {
    // create a file
    touch("example.txt");
}

// get file size
echo filesize("example.txt");

echo "<br>";

// write a string to a file
file_put_contents("example.txt", "Hello world");

// clear file system data cache to retrieve updated file size
clearstatcache();
echo filesize("example.txt");

echo "<br><br>";
// get file contents
echo file_get_contents("example.txt");