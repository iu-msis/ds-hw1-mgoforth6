<?php

require '../../app/common.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  require 'commentPost.php';
  exit;
}

$commentArr = Comment::getAllCommentById();

$json = json_encode($commentArr);

echo $json;
// database
// convert to Json
// print
