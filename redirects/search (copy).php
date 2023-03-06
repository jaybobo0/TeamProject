<?php /*1st Line on every webpage.*/ include $_SERVER['DOCUMENT_ROOT'].'/functions.php'; 
  
  //Clears the session 
  $_SESSION = array();
  
  //is button pressed?
  if(isset($_POST['btnSearch'])) {
    
    if($_POST['filterCategory'] == 'none' && $_POST['filterUse'] == 'none' ) {

      // process if NO filter is selected.
      header('Location: /index.php');
      exit(); //ends the php script.
      
    } elseif ($_POST['filterCategory'] != 'none'&& $_POST['filterUser'] == 'none' ) {
       
          $searchResultsIndex = 0;
  
  //clear session 
  $_SESSION['searchResult'] = [];
  
  //loop through json data
  foreach ($mergedTaskUserData as $key => $task) {

    //filter out the data
    if($_POST['filterCategory'] == $task['category']) {

      //Build a session
      $_SESSION['searchResult'][$searchResultsIndex] = $task;
        
      $searchResultsIndex++;      

            } //if() inside foreach
        }//foreach
      
    } elseif ($_POST['filterUsers'] != 'none' && $_POST['filterCategory'] == 'none' ) {
        
      // process if only USER is selected from filter
        $searchResultsIndex = 0;
        $_SESSION['searchResults'] = [];
        //loop throught medgedData
        foreach($mergedTaskUserData as $key => $task) {

            //check to see if search value matched data value
            if($_POST['filterUsers'] == $task['userUID']) {
              
              //search matches data. Build a session. 
              $_SESSION['searchResults'][$searchResultsIndex] = $task; 
              $searchResultsIndex++;

            } //if() inside foreach
          
        }//foreach

    } else {

      // process if only BOTH user and category are selected from filter
        $searchResultsIndex = 0;
        $_SESSION['searchResults'] = [];
        //loop throught medgedData
        foreach($mergedTaskUserData as $key => $task) {
            if($_POST['filterUsers'] == $task['userUID'] && $_POST['filterCategory'] == $task['category']) { // START:: if both are used
              //search matches data. Build a session. 
              $_SESSION['searchResults'][$searchResultsIndex] = $task; 
              $searchResultsIndex++;
                                                                                                            
            }// END::if both are used
        }// END::foreach
    }// END::else

    header('Location: /tasks/index.php?search=yes');
    exit(); //ends the php script.

  }//if() button pressed

// echo '<pre>';
// var_dump($mergedTaskUserData);
// echo '</pre>';

?>
