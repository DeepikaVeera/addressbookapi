<?php 
  $m = new MongoClient();

  $db= $m->selectDb("contactlist");

  $mObj = $db->contactlist->find();
?>
