<?php $_SERVER['DOCUMENT_ROOT'];

  // Get data from json file.
  $jsonTasks = file_get_contents($_SERVER['DOCUMENT_ROOT']."/data/tasks.json"); 
  $jsonUsers = file_get_contents($_SERVER['DOCUMENT_ROOT']."/data/users.json"); 
  // Convert json data to PHP array.
  $tasksData =  json_decode($jsonTasks, TRUE);   
  $usersData =  json_decode($jsonUsers, TRUE);   

  echo '<pre>';
  var_dump($tasksData);
  echo '</pre>';





?>