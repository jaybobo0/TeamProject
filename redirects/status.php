<?php /*1st Line on every webpage.*/ include $_SERVER['DOCUMENT_ROOT'].'/functions.php'; 

foreach($tasksData as $task) { //foreach start
  if ($task['uid'] == $_GET['uid']){ //if start
    $_SESSION['statusUpdate'] = $task;
  }//if end
 
}//foreach end


// echo '<pre>';
// var_dump($_SESSION['statusUpdate']);
// echo '</pre>';

header('Location: /tasks/status.php');
?>