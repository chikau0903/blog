<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Update Blog</title>
  <link rel="stylesheet" href="blog.css">
</head>
<body>
  <form method="post" action="update_blog.php">
    <div class="post">
      <h2>Update Blog</h2>
      <p>Title</p>
      <p><input type="text" name="name" size="40" placeholder="Title1" value="<?php echo $title ?>"></p>
      <p>Content</p>
      <p><textarea name="content" rows="8" cols="40"><?php echo $content ?></textarea></p>
      <p>
      <input type="hidden" name="post_no" value="<?php echo $post_no ?>">
      <input name="submit" type="submit" value="Update">
      </p>
</body>
</html>
