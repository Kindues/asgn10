<?php

class Connection
{
  public static function make()
  {
    
    try {
        return new PDO('mysql:host=127.0.0.1:8889; dbname=mytodo', 'root', 'root' );
    } catch (PDOException $e) {
        die($e->getMessage);
    }
  }
}

$pdo = Connection::make();