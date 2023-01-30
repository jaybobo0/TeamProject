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


$date = date_create($_POST['dateDeadline']);
$deadlineDateReformated = date_format($date, "Y/m/d");

//Create a new LARGEST UID based on existing UIDs in an array. 
$largest_uid = 0;
foreach ($tasksData as $item) {
    if ($item['uid'] > $largest_uid) {
        $largest_uid = $item['uid'];
        $newUID = $largest_uid+1;
    }
}

$newFormData = array(
          "uid"=> $newUID,
          "userUID"=> $_POST['user'],
          "dateDeadline"=> "2/20/23",
          "user"=> "new user",
          "dateCreate"=> date("Y m d"),
          "dateComplete"=> "",
          "status"=> "XXXXX",
          "title" => $_SESSION["form"]["title"],
          "categories" => $_SESSION["form"]["categories"],
          "reward" => $_SESSION["form"]["reward"],
          "description" => $_SESSION["form"]["description"],
          "timeNeeded" => $_SESSION["form"]["timeNeeded"]
);




array_push($tasksData, $newFormData);

$tasksDataAsJSON = json_encode($tasksData, JSON_PRETTY_PRINT);






  echo '<pre>';
  var_dump($tasksDataAsJSON);
  echo '</pre>';


file_put_contents($_SERVER['DOCUMENT_ROOT'].'/data/tasks.json', $tasksDataAsJSON);


?>