<?php

class Connection
{
  public static function make()
  {
    try {
        return new PDO('mysql:host=127.0.0.1; dbname=mytodo', 'root', 'root' );
      //return new PDO('mysql:host=127.0.0.1; dbname=myToDo', 'root', 'root' );
    } catch (PDOException $e) {
        die($e->getMessage());
    }
  }
}

//$pdo = Connection::make()