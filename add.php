<?php
  $m = new MongoClient();

  $db= $m->selectDb("contactlist");

  $mObj = $db->contactlist->insert($firstname, $lastname, $email, $mobile);
?>
