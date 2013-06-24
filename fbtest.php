<?php
  // Remember to copy files from the SDK's src/ directory to a
  // directory in your application on the server, such as php-sdk/
  require_once('php-sdk/facebook.php');

  $config = array(
    'appId' => '397774070342499',
    'secret' => '184fc42bbb676ce162cc00beff471cfa',
  );

  $facebook = new Facebook($config);
  $user_id = $facebook->getUser();
  $accesstoken = $facebook->getAccessToken();
//  $facebook->setAccessToken("CAAFpxf4p42MBAFWcp7bCU7gyy3cObH4pVRtIJWM4KQIfi6ZBiBZC8IMdMSQaM2nmJhTBFwRxU0QYgQiIF3YIEqHQZAJ588c95KhgQgoYVYmHoL2TMEqPAsZBg2f2ZCoCxNcNZChr3gx6o7trb2pIZCOMUVf9TPzZCBrdFHX4AZCRGVRGVYi6XxRQcs0zZA4ZAgF3uQ4XZChWJgOTIQZDZD");
?>
<html>
  <head></head>
  <body>

  <?php
    if($user_id) {

      // We have a user ID, so probably a logged in user.
      // If not, we'll get an exception, which we handle below.
      try {

        $user_profile = $facebook->api('/me','GET');
        echo "Name: " . $user_profile['name'];
          print "access token $accesstoken <br>";

        foreach ($user_profile as $key => $value)
        {
          print "-- ".$key." = ".$value."<br>";
        }


      } catch(FacebookApiException $e) {
        // If the user is logged out, you can have a
        // user ID even though the access token is invalid.
        // In this case, we'll get an exception, so we'll
        // just ask the user to login again here.
        $login_url = $facebook->getLoginUrl();
        echo 'Please <a href="' . $login_url . '">login.</a>';
        error_log($e->getType());
        error_log($e->getMessage());
      }
    } else {

      // No user, print a link for the user to login
      $login_url = $facebook->getLoginUrl();
      echo 'Please <a href="' . $login_url . '">login.</a>';

    }

     $fql = "SELECT name,uid FROM user WHERE uid=me() OR uid IN (SELECT uid2 FROM friend WHERE uid1 = me())";
      $ret_obj = $facebook->api(array(
                                         'method' => 'fql.query',
                                         'query' => $fql,
                                 ));

      // display results of fql query
      echo '<pre>';
      print $fql."<br>" ;
      print_r("query results:");
      print_r($ret_obj);
      echo '</pre>';

     $fql = "SELECT uid,rsvp_status FROM event_member WHERE eid =389106634503035 AND uid=100000123056449 ";
      $ret_obj = $facebook->api(array(
                                         'method' => 'fql.query',
                                         'query' => $fql,
                                 ));

      // display results of fql query
      echo '<pre>';
      print $fql."<br>" ;
      print_r("query results:");
      print_r($ret_obj);
      echo '</pre>';


$lat = "40";
$long = "30";
$limit= " limit 5";
$created_time = date("Y-m-d");

// using offset gives us a "square" on the map from where to search the events
$offset = 0.4;

$fql = "SELECT pic_big, name, venue, location, start_time, eid FROM event WHERE eid IN (SELECT eid FROM event_member WHERE uid IN (SELECT uid2 FROM friend WHERE uid1 = me())) AND start_time > '$created_time' ORDER BY start_time";
      print $fql."<br>" ;
//     $fql = "SELECT name,location FROM event WHERE start_time = '2010-03-14T14:00:00' LIMIT 1";
      $ret_obj = $facebook->api(array(
                                         'method' => 'fql.query',
                                         'query' => $fql,
                                 ));

      // display results of fql query
      echo '<pre>';
      print_r("query results:");
      print_r($ret_obj);
      echo '</pre>';


//      $ret_obj = $facebook->api("331218348435/invited", "GET");

      // display results of fql query
//      echo '<pre>';
//      print $fql."<br>" ;
//      print_r("query results:");
//      print_r($ret_obj);
//      echo '</pre>';


      $ret_obj = $facebook->api("100000123056449", "GET");

      // display results of fql query
      echo '<pre>';
      print $fql."<br>" ;
      print_r("query results:");
      print_r($ret_obj);
      echo '</pre>';


  ?>

  </body>
</html>