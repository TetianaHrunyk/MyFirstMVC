<?php
function OpenCon()
 {
    $dbhost = "bcprojectdb.cwjbtpfbti4h.eu-central-1.rds.amazonaws.com";
    $dbuser = "tania_admin";
    $dbpass = "TeGrRo00";
    $db = "BCproject";
    $port = 3306;
    
    
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db, $port) or die("Connect failed: %s\n". $conn->error);

    if (!$conn->set_charset("utf8")) {
      printf("Error loading character set utf8: %s\n", $conn->error);
      exit();
    }

    return $conn;
 }
 
