<?php

require 'database/Connection.php';
require 'database/QueryBuilder.php';

$pdo = Connection::make();

$tasks = fetchAllTasks($pdo);

require 'index.view.php';

