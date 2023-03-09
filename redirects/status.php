<?php /*1st Line on every webpage.*/ include $_SERVER['DOCUMENT_ROOT'].'/functions.php'; 

if (isset($_GET['uid'])) {
   foreach($mergedTaskUserData as $task) 
   { //foreach start
  if ($task['uid'] == $_GET['uid']){ //if start
    $_SESSION['statusUpdate'] = $task;
  }//if end
 
}//foreach end

header('Location: /tasks/status.php');
  
  } elseif (isset($_POST['btnEdit'])) {

    if($_POST['statusUpdate'] == "0"){
       header('Location: /index.php');
    } else {
      // echo $_POST['statusUpdate'];


      $indexNumber = 0;
      foreach($tasksData as $task){ // start foreach
        if($task['uid'] == $_SESSION['statusUpdate']['uid']){ // start if

          $tasksData[$indexNumber]["status"] = $_POST['statusUpdate'];
                                                             
          //encode tasksData back into json
          $tasksDataAsJSON = json_encode($tasksData, JSON_PRETTY_PRINT);
          //put the contents
          file_put_contents($_SERVER['DOCUMENT_ROOT'].'/data/tasks.json', $tasksDataAsJSON);
          //redirect
          header('Location: /index.php');
                                              
        } //end if

        $indexNumber++;
                                 
      } // end foreach
     
    } // end else
   
  } else {
 
    echo "why are you here >:(";
  }


  // echo '<pre>';
  // var_dump($taskData);
  // echo '</pre>';
 
?>
