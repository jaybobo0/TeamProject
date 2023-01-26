<?php $_SERVER['DOCUMENT_ROOT'];



  // Get data from json file.
  $jsonTasks = file_get_contents($_SERVER['DOCUMENT_ROOT']."/data/tasks.json"); 
  $jsonUsers = file_get_contents($_SERVER['DOCUMENT_ROOT']."/data/users.json"); 
  // Convert json data to PHP array.
  $tasksData =  json_decode($jsonTasks, TRUE);   
  $usersData =  json_decode($jsonUsers, TRUE);   



$_SESSION["form"]["title"] = $_POST['title'];
$_SESSION["form"]["categories"] = $_POST['categories'];
$_SESSION["form"]["reward"] = $_POST['reward'];
$_SESSION["form"]["description"] = $_POST['description'];
$_SESSION["form"]["timeNeeded"] = $_POST['timeNeeded'];


// $newFormData = array(
//            "title" => $_SESSION["form"]["title"],
//            "categories" => $_SESSION["form"]["categories"],
//            "reward" => $_SESSION["form"]["reward"],
//            "description" => $_SESSION["form"]["description"],
//            "timeNeeded" => $_SESSION["form"]["timeNeeded"]
// );

// echo $newFormData;


// array_push($tasksData, $newFormData);

// $jsonData = json_encode($tasksData, JSON_PRETTY_PRINT);

echo $_SESSION["form"]["title"];




  echo '<pre>';
  var_dump($jsonData);
  echo '</pre>';





?>