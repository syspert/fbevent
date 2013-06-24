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


  ?>

  </body>
</html>