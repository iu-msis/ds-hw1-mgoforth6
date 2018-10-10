<?php

class Comment
{
  public $id;
  public $comment;

  public function __construct($row) {
    $this->id = $row['id'];
    $this->comment = $row['comment'];

  }

}
