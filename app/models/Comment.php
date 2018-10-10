<?php

class Comment
{
  public $id;
  public $comment;

  public function __construct($row) {
    $this->id = intval($row['id']);
    $this->comment = $row['comment'];

  }

  public function create() {

    $db = new PDO(DB_SERVER, DB_USER, DB_PW);

    $sql = 'INSERT Comments (id, comment)
            VALUES (?, ?)';

    $statement = $db->prepare($sql);

    $success = $statement->execute(
    );
  }

  public static function getAllCommentById() {

    $db = new PDO(DB_SERVER, DB_USER, DB_PW);

    $sql = 'SELECT * From Comments';

    $statement = $db->prepare($sql);

    $success = $statement->execute(
    );

    $arr = [];
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
      $commentItem = new Comment($row);


      array_push($arr, $commentItem);


    }

    return $arr;
  }

}
