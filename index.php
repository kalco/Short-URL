<?php
/**
 * Created by PhpStorm.
 * User: Kalco
 * Date: 07/12/2014
 * Time: 22:24
 */
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Short URL</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container">
   <h1 class="title">Short URL</h1>
      <?php
      if(isset($_SESSION['feedback'])) {
          echo "<p>".$_SESSION['feedback']."</p>";
          unset($_SESSION['feedback']);
      }
      ?>

      <form action="generator.php" method="post">
    <input type="url" name="url" placeholder="Enter URL" autocomplete="off">
    <input type="submit" value="Get URL">
   </form>
  </div>
</body>
</html>