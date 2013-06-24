<?php
  // Remember to copy files from the SDK`s src/ directory to a
  // directory in your application on the server, such as php-sdk/
  require_once('php-sdk/facebook.php');

  $config = array(
    'appId' => '397774070342499',
    'secret' => '184fc42bbb676ce162cc00beff471cfa',
  );

  $facebook = new Facebook($config);
  $logout_url = $facebook->getLogoutUrl();
  echo 'Please <a href="' . $logout_url . '">logout.</a>';
        $facebook->destroySession();


  ?>

  </body>
</html>