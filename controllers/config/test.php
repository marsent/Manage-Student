<?php
require './databaseController.php';
require './Table.php';
$q=new DataAccessHelper();
$a=new Table($q);
$b=$a->getTable();
echo $b;
