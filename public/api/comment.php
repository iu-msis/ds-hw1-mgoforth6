<?php

require '../../app/common.php';

$commentId = $_GET['id'] ?? 0;

if ($commentId <1) {
  throw new Exception('Invalid Comment ID');
}

// database
// convert to Json
// print 
