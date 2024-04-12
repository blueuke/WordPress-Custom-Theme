<?php

// Automatically loads all the folders if the file index exists
$dir = new DirectoryIterator(dirname(__FILE__));

foreach ($dir as $fileinfo) {
  if ($fileinfo->isDir() && !$fileinfo->isDot()) {
    $index_file = $fileinfo->getPathname() . '/index.php';
    if (file_exists($index_file)) {
      include $index_file;
    }
  }
}