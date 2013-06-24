<?php
  // Remember to copy files from the SDK`s src/ directory to a
  // directory in your application on the server, such as php-sdk/
  require_once('php-sdk/facebook.php');
  require_once('dbcon.php');

  $config = array(
    'appId' => '397774070342499',
    'secret' => '184fc42bbb676ce162cc00beff471cfa',
  );

  $facebook = new Facebook($config);
  $user_id = $facebook->getUser();
?>
<html>
  <head></head>
  <body>

<?php
  if($user_id) {print $user_id."<br>";
    // We have a user ID, so probably a logged in user.
    // If not, we`ll get an exception, which we handle below.
  } else {
    // No user, print a link for the user to login
    $login_url = $facebook->getLoginUrl();
    echo 'Please <a href="' . $login_url . '">login.</a>';
    return;
  }

  $created_time = date("Y-m-d");

  $sqlev = "SELECT COUNT( uid ) AS cc, eid, start_time FROM fbevent_member WHERE uidcur = $user_id AND start_time >= '$created_time' GROUP BY eid ORDER BY SUBSTR( start_time, 1, 10 ) , cc DESC LIMIT 0 , 15";
  $res=mysql_query($sqlev, $db);

  $cc = array();
  $eid = array();
  $start_time = array();

  while ($userev = mysql_fetch_object ($res))
  {
    print_r("query results: $created_time ");
    print_r($userev);
    print "<br>";
    $cc[] = $userev->cc;
    $eid[] = $userev->eid;
    $start_time[] = $userev->start_time;
  }
  $numev = count($eid);
  if ($numev > 0)
    $where = " eid = $eid[0] ";
  for ($x = 1; $x < $numev; $x++) {
    $where .= " OR eid = $eid[$x] ";
  }

  $fql = "SELECT pic, pic_big, name, description, venue, location, start_time, end_time, update_time, eid, attending_count, all_members_count,
    can_invite_friends, creator, declined_count FROM event WHERE $where";
  $ret_obj = $facebook->api(array(
      'method' => 'fql.query',
      'query' => $fql,
      ));
  echo '<pre>';
  print $fql."<br>" ;
  print "query results:<br>";
  for ($x = 1; $x < $numev; $x++) {
    print "<img src='".$ret_obj[$x]['pic']."'>.<br>";
    print $ret_obj[$x]['name']."<br>";
    print $cc[$x]."<br>";
    print $ret_obj[$x]['attending_count']."<br>";
  }
  echo '</pre>';




  ?>

  </body>
</html>