<?php
  // Remember to copy files from the SDK`s src/ directory to a
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
      // If not, we`ll get an exception, which we handle below.
    } else {

      // No user, print a link for the user to login
      $login_url = $facebook->getLoginUrl();
      echo 'Please <a href="' . $login_url . '">login.</a>';
      return;

    }

      $fql = "SELECT about_me from user where uid = 100000133026789";
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
      $fql = "SELECT activities from user where uid = 100000133026789";
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
      $fql = "SELECT affiliations from user where uid = 100000133026789";
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
      $fql = "SELECT age_range from user where uid = 100000133026789";
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
      $fql = "SELECT allowed_restrictions from user where uid = 100000133026789";
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
      $fql = "SELECT birthday from user where uid = 100000133026789";
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
      $fql = "SELECT birthday_date from user where uid = 100000133026789";
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
      $fql = "SELECT books from user where uid = 100000133026789";
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
      $fql = "SELECT can_message from user where uid = 100000133026789";
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
      $fql = "SELECT can_post from user where uid = 100000133026789";
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
      $fql = "SELECT contact_email from user where uid = 100000133026789";
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
      $fql = "SELECT currency from user where uid = 100000133026789";
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
      $fql = "SELECT current_address from user where uid = 100000133026789";
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
      $fql = "SELECT current_location from user where uid = 100000133026789";
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
      $fql = "SELECT devices from user where uid = 100000133026789";
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
      $fql = "SELECT education from user where uid = 100000133026789";
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
      $fql = "SELECT education_history from user where uid = 100000133026789";
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
      $fql = "SELECT email from user where uid = 100000133026789";
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
      $fql = "SELECT email_hashes from user where uid = 100000133026789";
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
      $fql = "SELECT family from user where uid = 100000133026789";
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
      $fql = "SELECT favorite_athletes from user where uid = 100000133026789";
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
      $fql = "SELECT favorite_teams from user where uid = 100000133026789";
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
      $fql = "SELECT first_name from user where uid = 100000133026789";
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
      $fql = "SELECT friend_count from user where uid = 100000133026789";
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
      $fql = "SELECT friend_request_count from user where uid = 100000133026789";
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
      $fql = "SELECT games from user where uid = 100000133026789";
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
      $fql = "SELECT has_added_app from user where uid = 100000133026789";
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
      $fql = "SELECT has_timeline from user where uid = 100000133026789";
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
      $fql = "SELECT hometown_location from user where uid = 100000133026789";
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
      $fql = "SELECT hs_info from user where uid = 100000133026789";
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
      $fql = "SELECT inspirational_people from user where uid = 100000133026789";
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
      $fql = "SELECT install_type from user where uid = 100000133026789";
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
      $fql = "SELECT interests from user where uid = 100000133026789";
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
      $fql = "SELECT is_app_user from user where uid = 100000133026789";
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
      $fql = "SELECT is_blocked from user where uid = 100000133026789";
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
      $fql = "SELECT is_verified from user where uid = 100000133026789";
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
      $fql = "SELECT languages from user where uid = 100000133026789";
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
      $fql = "SELECT last_name from user where uid = 100000133026789";
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
      $fql = "SELECT likes_count from user where uid = 100000133026789";
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
      $fql = "SELECT locale from user where uid = 100000133026789";
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
      $fql = "SELECT meeting_for from user where uid = 100000133026789";
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
      $fql = "SELECT meeting_sex from user where uid = 100000133026789";
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
      $fql = "SELECT middle_name from user where uid = 100000133026789";
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
      $fql = "SELECT movies from user where uid = 100000133026789";
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
      $fql = "SELECT music from user where uid = 100000133026789";
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
      $fql = "SELECT mutual_friend_count from user where uid = 100000133026789";
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
      $fql = "SELECT name from user where uid = 100000133026789";
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
      $fql = "SELECT name_format from user where uid = 100000133026789";
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
      $fql = "SELECT notes_count from user where uid = 100000133026789";
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
      $fql = "SELECT online_presence from user where uid = 100000133026789";
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
      $fql = "SELECT pic from user where uid = 100000133026789";
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
      $fql = "SELECT pic_big from user where uid = 100000133026789";
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
      $fql = "SELECT pic_big_with_logo from user where uid = 100000133026789";
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
      $fql = "SELECT pic_cover from user where uid = 100000133026789";
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
      $fql = "SELECT pic_small from user where uid = 100000133026789";
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
      $fql = "SELECT pic_small_with_logo from user where uid = 100000133026789";
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
      $fql = "SELECT pic_square from user where uid = 100000133026789";
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
      $fql = "SELECT pic_square_with_logo from user where uid = 100000133026789";
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
      $fql = "SELECT pic_with_logo from user where uid = 100000133026789";
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
      $fql = "SELECT political from user where uid = 100000133026789";
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
      $fql = "SELECT profile_blurb from user where uid = 100000133026789";
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
      $fql = "SELECT profile_update_time from user where uid = 100000133026789";
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
      $fql = "SELECT profile_url from user where uid = 100000133026789";
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
      $fql = "SELECT proxied_email from user where uid = 100000133026789";
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
      $fql = "SELECT quotes from user where uid = 100000133026789";
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
      $fql = "SELECT relationship_status from user where uid = 100000133026789";
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
      $fql = "SELECT religion from user where uid = 100000133026789";
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
      $fql = "SELECT search_tokens from user where uid = 100000133026789";
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
      $fql = "SELECT security_settings from user where uid = 100000133026789";
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
      $fql = "SELECT sex from user where uid = 100000133026789";
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
      $fql = "SELECT significant_other_id from user where uid = 100000133026789";
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
      $fql = "SELECT sort_first_name from user where uid = 100000133026789";
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
      $fql = "SELECT sort_last_name from user where uid = 100000133026789";
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
      $fql = "SELECT sports from user where uid = 100000133026789";
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
      $fql = "SELECT status from user where uid = 100000133026789";
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
      $fql = "SELECT subscriber_count from user where uid = 100000133026789";
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
      $fql = "SELECT third_party_id from user where uid = 100000133026789";
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
      $fql = "SELECT timezone from user where uid = 100000133026789";
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
      $fql = "SELECT tv from user where uid = 100000133026789";
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
      $fql = "SELECT uid from user where uid = 100000133026789";
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
      $fql = "SELECT username from user where uid = 100000133026789";
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
      $fql = "SELECT verified from user where uid = 100000133026789";
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
      $fql = "SELECT video_upload_limits from user where uid = 100000133026789";
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
      $fql = "SELECT viewer_can_send_gift from user where uid = 100000133026789";
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
      $fql = "SELECT wall_count from user where uid = 100000133026789";
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
      $fql = "SELECT website from user where uid = 100000133026789";
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
      $fql = "SELECT work from user where uid = 100000133026789";
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
      $fql = "SELECT work_history from user where uid = 100000133026789";
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


  ?>

  </body>
</html>