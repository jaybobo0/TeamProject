<?php $_SERVER['DOCUMENT_ROOT'];



  // Get data from json file.
  $jsonTasks = file_get_contents($_SERVER['DOCUMENT_ROOT']."/data/tasks.json"); 
  $jsonUsers = file_get_contents($_SERVER['DOCUMENT_ROOT']."/data/users.json"); 
  // Convert json data to PHP array.
  $tasksData =  json_decode($jsonTasks, TRUE);   
  $usersData =  json_decode($jsonUsers, TRUE);   



$_SESSION["form"]["title"] = $_POST['title'];
$_SESSION["form"]["last-name"] = $_POST['last-name'];
$_SESSION["form"]["email"] = $_POST['email'];
$_SESSION["form"]["phone-number"] = $_POST['phone-number'];
$_SESSION["form"]["relationship-status"] = $_POST['relationship-status'];





  echo '<pre>';
  var_dump($tasksData);
  echo '</pre>';





?>