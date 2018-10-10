<?php

require '../../app/common.php';

$commentId = intval($_GET['id'] ?? 0);

if ($commentId <1) {
  throw new Exception('Invalid Comment ID');
}

$commentArr = Comment::getAllCommentById($commentId);

$json = json_encode($commentArr);

echo $json;
// database
// convert to Json
// print
