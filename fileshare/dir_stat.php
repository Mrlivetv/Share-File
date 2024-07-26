<?php
//Configrations
include("include/config.php"); 

$stat = stat("$folder");
echo 'time: ' . $stat['mtime']; /* time of last modification (Unix timestamp) */
echo 'size: ' . $stat['size'];  /* size in bytes */
?>