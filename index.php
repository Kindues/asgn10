<?php


$query = require 'bootstrap.php';

//require 'Task.php';



$tasks = $query->selectAll('mytodo');

//$tasks = array_map(function ($task){
//  $t = new Task();
//  $t->description = $task['description']
//}, $tasks);
  
//die(var_dump($tasks));
require 'index.view.php';

