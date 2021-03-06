<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Blog</title>
<link rel="stylesheet" href="blog.css">
</head>
<body>
<h1>Blog</h1>
<?php foreach ($posts as $post) { ?>
  <div class="post">
    <h2><?php echo $post['title'] ?></h2>
    <p><?php echo nl2br($post['content']) ?></p>
    <?php foreach ($post['comments'] as $comment) { ?>
      <div class="comment">
        <h3><?php echo $comment['name'] ?></h3>
        <p><?php echo nl2br($comment['content']) ?></p>
      </div>
    <?php } ?>
    <p class="commment_link">
      投稿日：<?php echo $post['time'] ?>　
      <a href="comment.php?no=<?php echo $post['no'] ?>">コメント</a>
    </p>
    <p class="update_link">
    <a href="update_blog.php">update</a>
  </p>
  </div>
<?php } ?>
</body>
<footer>
  <div class='post_btn'>
  <a href="post.php">Post Blog</a>
  </div>
</footer>
</html>
