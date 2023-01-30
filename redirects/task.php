<?php /*1st Line on every webpage.*/ include $_SERVER['DOCUMENT_ROOT'].'/functions.php'; 


//format deadline
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
//turn data into php array
$newFormData = array(
          "uid"=> $newUID,
          "userUID"=> $_POST['user'],
          "dateDeadline"=> "2/20/23",
          "user"=> "new user",
          "dateCreate"=> date("Y m d"),
          "dateComplete"=> "",
          "status"=> "XXXXX",
          "title" => $_POST["title"],
          "categories" => $_POST["categories"],
          "reward" => $_POST['reward'],
          "description" => $_POST['description'],
          "timeNeeded" => $_POST['timeNeeded']
);



//push newform data (The php array we just made) into tasksData (the json data that was converted into a php array)
array_push($tasksData, $newFormData);
//encode tasksData back into json
$tasksDataAsJSON = json_encode($tasksData, JSON_PRETTY_PRINT);





//encho out taksData
  echo '<pre>';
  var_dump($tasksDataAsJSON);
  echo '</pre>';

//put the data into json
file_put_contents($_SERVER['DOCUMENT_ROOT'].'/data/tasks.json', $tasksDataAsJSON);


?>