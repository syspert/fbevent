<?php


//error_reporting(0);

function ndbcon() {

  $http = $_SERVER['HTTP_HOST'];
    $db = mysql_connect("localhost","root","");
    mysql_select_db("fb",$db);
  return $db;
}
$db = ndbcon();
?>
