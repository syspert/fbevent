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

$lat = "40";
$long = "30";
$limit= " limit 5";
$created_time = date("Y-m-d");

// using offset gives us a "square" on the map from where to search the events
$offset = 0.4;
$fql = "SELECT eid, uid, start_time, inviter, rsvp_status  FROM event_member WHERE uid IN (SELECT uid2 FROM friend WHERE uid1 = me()) AND start_time >= '$created_time'";
//$fql = "SELECT pic, pic_big, name, description, venue, location, start_time, end_time, update_time, eid, attending_count, all_members_count,
//can_invite_friends, creator, declined_count FROM event WHERE eid IN (SELECT eid FROM event_member WHERE uid IN (SELECT uid2 FROM friend WHERE uid1 = me())) AND start_time > '$created_time'";
//$fql = "SELECT COUNT(uid) FROM event_member WHERE uid IN (SELECT uid2 FROM friend WHERE uid1 = me())) AND start_time > '$created_time'";
      print $fql."<br>" ;
//     $fql = "SELECT name,location FROM event WHERE start_time = '2010-03-14T14:00:00' LIMIT 1";
      $ret_event = $facebook->api(array(
                                         'method' => 'fql.query',
                                         'query' => $fql,
                                 ));

      // display results of fql query
      echo '<pre>';
      print_r("query results:");
      print_r($ret_event);
      echo '</pre>';

    if ($ret_event) {
      $arlen = count($ret_event);

      for ($x = 0; $x < $arlen; $x++) {
        $eid = $ret_event[$x]['eid'];
        $uid = $ret_event[$x]['uid'];
        $start_time = $ret_event[$x]['start_time'];
        $inviter = $ret_event[$x]['inviter'];
        $rsvp_status = $ret_event[$x]['rsvp_status'];


        $sqlup = "INSERT fbevent_member SET
                  eid = '$eid',
                  uid = '$uid',
                  uidcur = '$user_id',
                  start_time = '$start_time',
                  inviter = '$inviter',
                  rsvp_status = '$rsvp_status'
                  ON DUPLICATE KEY UPDATE
                  eid = '$eid',
                  uid = '$uid',
                  start_time = '$start_time',
                  inviter = '$inviter',
                  rsvp_status = '$rsvp_status'";
        $resup = mysql_query($sqlup, $db);
        if ($resup != 1)
          print mysql_errno($db). ": " . mysql_error($db). ": " .$sqlup."<br>";

      }
    }


  ?>

  </body>
</html>