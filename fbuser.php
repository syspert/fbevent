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
    if($user_id) {
      print "<br>$user_id<br>";
      // No user, print a link for the user to login
      $logout_url = $facebook->getLogoutUrl(array( 'next' => 'http://sysperttest.nl/dayteaser/fbuserin.php'));
      echo 'Please <a href="' . $logout_url . '">logout.</a>';

      // We have a user ID, so probably a logged in user.
      // If not, we`ll get an exception, which we handle below.
    } else {

      // No user, print a link for the user to login
      $login_url = $facebook->getLoginUrl();
      echo 'Please <a href="' . $login_url . '">login.</a>';
      return;

    }

    $fql = "SELECT uid,name,first_name,middle_name,last_name,pic_square,sex,username,friend_count,current_address,current_location,locale,profile_url from user where uid = me() OR uid IN (SELECT uid2 FROM friend WHERE uid1 = me())";
    $ret_user = $facebook->api(array(
               'method' => 'fql.query',
               'query' => $fql,
               ));

    // display results of fql query
    echo '<pre>';
    print $fql."<br>" ;
    print_r("query results:");
    print_r($ret_user);
    echo '</pre>';
    if ($ret_user) {
      $arlen = count($ret_user);

      for ($x = 0; $x < $arlen; $x++) {
        $uid = $ret_user[$x]['uid'];
        $name = $ret_user[$x]['name'];
        $first_name = $ret_user[$x]['first_name'];
        $middle_name = $ret_user[$x]['middle_name'];
        $last_name = $ret_user[$x]['last_name'];
        $pic_square = $ret_user[$x]['pic_square'];
        $sex = $ret_user[$x]['sex'];
        $username = $ret_user[$x]['username'];
        $friend_count = $ret_user[$x]['friend_count'];
        if ($ret_user[$x]['current_address'] != "" and array_key_exists("city",   $ret_user[$x]['current_address']))   $city = $ret_user[$x]['current_address']['city']; else $city = "";
        $locale = $ret_user[$x]['locale'];
        $profile_url = $ret_user[$x]['profile_url'];


        $sqlup = "INSERT fbuser SET
                  uid = '$uid',
                  name = '$name',
                  first_name = '$first_name',
                  middle_name = '$middle_name',
                  last_name = '$last_name',
                  pic_square = '$pic_square',
                  sex = '$sex',
                  username = '$username',
                  friend_count = '$friend_count',
                  city = '$city',
                  locale = '$locale',
                  profile_url = '$profile_url'
                  ON DUPLICATE KEY UPDATE
                  uid = '$uid',
                  name = '$name',
                  first_name = '$first_name',
                  middle_name = '$middle_name',
                  last_name = '$last_name',
                  pic_square = '$pic_square',
                  sex = '$sex',
                  username = '$username',
                  friend_count = '$friend_count',
                  city = '$city',
                  locale = '$locale',
                  profile_url = '$profile_url'";
        $resup = mysql_query($sqlup, $db);
        if ($resup != 1)
          print mysql_errno($db). ": " . mysql_error($db). ": " .$sqlup."<br>";

      }
    }
?>

  </body>
</html>