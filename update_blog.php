<?php
  $title = htmlspecialchars($_GET['title']);
  $pdo = new PDO("mysql:dbname=blog", "root", "chikau");
  $st = $pdo->prepare("UPDATE post SET title=?,conent=? WHERE title=?");
  $st->execute(array($_POST['title'], $_POST['content'], $_POST['old_title']));

  require 't_update_blog.php'
  ?>

  Success to update.<br>
  <a href="index.php">Back</a>
