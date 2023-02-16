<?php /*1st Line on every webpage.*/ include $_SERVER['DOCUMENT_ROOT'].'/functions.php'; 

//see if button is pressed
if (isset($_POST['btnSearch'])) {
  
  $searchResultsIndex = 0;
  
  //loop through json data
  foreach ($mergedTaskUserData as $key => $task) {

    //filter out the data
    if($_POST['filterCategory'] == $task['categories']) {

    //Build a session
      $_SESSION['searchResult'][$searchResultsIndex] = [$task];
        
      $searchResultsIndex++;      



      
    }
  }
  


  
  echo '<pre>';
  var_dump($_SESSION['searchResult']);
  echo '</pre>';

  }
  else
  {
  // error
}




?>