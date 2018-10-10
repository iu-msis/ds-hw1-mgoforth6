<?php

class Comment
{
  public $id;
  public $comment;

  public function __construct($row) {
    $this->id = $row['id'];
    $this->comment = $row['comment'];

  }

  public static function getAllCommentById(int $commentId) {

    $db = new PDO(DB_SERVER, DB_USER, DB_PW);

    $sql = 'SELECT * From Comments';

    $statement = $db->prepare(sql);

    $success = $statement->execute(
      []
    );

    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
      $


    }
  }

}
