<?php /*1st Line on every webpage.*/ include $_SERVER['DOCUMENT_ROOT'].'/functions.php'; 

//empty session
$_SESSION = array();

//see if button is pressed
if (isset($_POST['btnSearch'])) {
  if($_POST['filterCategory'] != 'none'&& $_POST['filterUser'] == 'none' ){
    echo 'Use Cats';
  
    
  $searchResultsIndex = 0;
  
  //clear session 
  $_SESSION['searchResult'] = [];
  
  //loop through json data
  foreach ($mergedTaskUserData as $key => $task) {

    //filter out the data
    if($_POST['filterCategory'] == $task['categories']) {

      //Build a session
      $_SESSION['searchResult'][$searchResultsIndex] = $task;
        
      $searchResultsIndex++;      



      
    }
  }
  
  echo '<pre>';
  var_dump($_SESSION['searchResult']);
  echo '</pre>';

  // //send to user index.php
  // header('Location: /tasks.php?search=yes');
  

  // }
  // else
  // {
  // // error





?>