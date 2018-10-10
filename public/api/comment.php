<?php

require '../../app/common.php';



$commentArr = Comment::getAllCommentById();

$json = json_encode($commentArr);

echo $json;
// database
// convert to Json
// print
