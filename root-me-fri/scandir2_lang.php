<?php

# 1. set cwd value

# 2. scan cwd value for all files

# 3. print all files to the screen

$pwd = getcwd();
$files = scandir($pwd);

print_r($files);

?>
