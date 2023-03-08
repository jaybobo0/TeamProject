<?php /*1st Line on every webpage.*/ include $_SERVER['DOCUMENT_ROOT'].'/functions.php'; 

if (isset($_GET['uid'])) {
   foreach($mergedTaskUserData as $task) { //foreach start
  if ($task['uid'] == $_GET['uid']){ //if start
    $_SESSION['statusUpdate'] = $task;
  }//if end
 
}//foreach end

// header('Location: /tasks/status.php');
  
} else if (isset($_POST['BTNstatus'])){ //else if start
  $indexNumber = 0;
   foreach($tasksData as $task){ //foreach start
    
    if ($task['uid'] == $_SESSION['statusUpdate']['uid']){ //if start

      $taskData[$indexNumber]['status'] = $_POST['statusUpdate'];
       $indexNumber++;
        //encode tasksData back into json
        $tasksDataAsJSON = json_encode($tasksData, JSON_PRETTY_PRINT);
        //put the data into json
        file_put_contents($_SERVER['DOCUMENT_ROOT'].'/data/tasks.json', $tasksDataAsJSON);
      
    } //if end
   } //foreach end 
     
} //else if start end 
else {
  echo 'wy are you here >:(';

 
  }




// echo '<pre>';
// var_dump($_SESSION['statusUpdate']);
// echo '</pre>';


?>