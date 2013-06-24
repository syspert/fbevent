<?php /* ========================================================== start php */
//error_reporting(0);
function ndbcon() {
  $http = $_SERVER['HTTP_HOST'];

  if ($_SERVER['HTTP_HOST'] == "syspert.downfire.com")
  {
    $db = mysql_connect("192.168.0.11","u101684152   u101684152","asdf0202");
    mysql_select_db("u101684152",$db);
  }
  else if ($_SERVER['SERVER_ADDR'] == "127.0.0.1" || $_SERVER['SERVER_ADDR'] == "192.168.2.20" || $_SERVER['HTTP_HOST'] == "87.212.192.99")
  {
    $db = mysql_connect("localhost","root","");
    mysql_select_db("fb",$db);
  }
  return $db;
}

$db = ndbcon();

/* ================================================================ end   php */ ?>
