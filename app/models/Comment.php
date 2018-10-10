<?php

class Comment
{
  public $id;
  public $comment;

  public function __construct($row) {
    $this->id = intval($row['id']);
    $this->comment = $row['comment'];

  }

  public static function getAllCommentById(int $commentId) {

    $db = new PDO(DB_SERVER, DB_USER, DB_PW);

    $sql = 'SELECT * From Comments';

    $statement = $db->prepare(sql);

    $success = $statement->execute(
      []
    );

    $arr = [];
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
      $commentItem = new Comment($row);


      array_push($arr, $commentItem);


    }

    return $arr;
  }

}
