<?php
/**
 * Created by PhpStorm.
 * User: Kalco
 * Date: 07/12/2014
 * Time: 22:48
 */

  require_once "classes/shorturl.php";

  if(isset($_GET['code'])) {
      $s = new ShortUrl();
      $code = $_GET['code'];
      if($url = $s->getUrl($code)) {
          header('Location: {$url}');
          exit();
      }
  }

  header('Location: index.php');
?>