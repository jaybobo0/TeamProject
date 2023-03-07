<?php /*1st Line on every webpage.*/ include $_SERVER['DOCUMENT_ROOT'].'/functions.php'; 

if (isset($_GET['uid'])) {
   foreach($mergedTaskUserData as $task) { //foreach start
  if ($task['uid'] == $_GET['uid']){ //if start
    $_SESSION['statusUpdate'] = $task;
  }//if end
 
}//foreach end

// header('Location: /tasks/status.php');
  
} else if (isset($_POST['BTNstatus'])){
  echo 'its already set';
} else {
  echo 'wy are you here >:(';
}



// echo '<pre>';
// var_dump($_SESSION['statusUpdate']);
// echo '</pre>';


?>