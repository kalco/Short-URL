<?php
/**
 * Created by PhpStorm.
 * User: Kalco
 * Date: 07/12/2014
 * Time: 22:40
 */
  session_start();
  require_once "classes/shorturl.php";

  $s = new ShortUrl();

  if(isset($_POST['url'])) {
      $url = $_POST['url'];

      if($code = $s->makeCode($url)) {
          $_SESSION['feedback'] = "Done! Your link: <a href='http://localhost/test/$code'>http://localhost/test/$code</a>";
      } else {
          $_SESSION['feedback'] = "Error! Not valid URL";
      }
  }
  header('Location: index.php');
?>