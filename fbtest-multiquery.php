<?php
  // Remember to copy files from the SDK's src/ directory to a
  // directory in your application on the server, such as php-sdk/
  require_once('php-sdk/facebook.php');

  $config = array(
    'appId' => '397774070342499',
    'secret' => '8a2bca40a12856fdf04f31fd30a746cd',
  );

  $facebook = new Facebook($config);
  $user_id = $facebook->getUser();
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
        $signed_request = $facebook->getSignedRequest();
        echo "<br> signed_request  $signed_request <br>" ;
        $access_token = $facebook->getAccessToken();
        echo "<br> access_token  $access_token <br>" ;

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
     $fql_multiquery_url = 'https://graph.facebook.com/'
        . 'fql?q={"all+friends":"SELECT+uid2+FROM+friend+WHERE+uid1=me()",'
        . '"my+name":"SELECT+name+FROM+user+WHERE+uid=me()+OR+uid+IN+(SELECT+uid2+FROM+friend+WHERE+uid1+=+me())"}'
        . '&access_token=' . $access_token;
     $fql_multiquery_url = 'https://graph.facebook.com/'
        . 'fql?q={"my+name":"SELECT+name+FROM+user+WHERE+uid=me()+OR+uid+IN+(SELECT+uid2+FROM+friend+WHERE+uid1+=+me())"}'
        . '&access_token=' . $access_token;
     $fql = "SELECT name,uid FROM user WHERE uid=me() OR uid IN (SELECT uid2 FROM friend WHERE uid1 = me())";
      $ret_obj = $facebook->api(array(
                                         'method' => 'fql.query',
                                         'query' => $fql,
                                 ));
//      $fql_multiquery_result = file_get_contents($fql_multiquery_url);
//      $fql_multiquery_obj = json_decode($fql_multiquery_result, true);

      // display results of fql multiquery
      echo '<pre>';
      print $fql."<br>" ;
      print_r("multi query results:");
      print_r($ret_obj);
      echo '</pre>';

  ?>

  </body>
</html>