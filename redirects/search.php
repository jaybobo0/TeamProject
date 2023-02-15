<?php /*1st Line on every webpage.*/ include $_SERVER['DOCUMENT_ROOT'].'/functions.php'; 


if (isset($_POST['submit'])) {

  $i = 0;

foreach ($tasksData as $task) {
  
  if ($task['categories'] == $_POST['filterCategory']) {
    $_SESSION["$i"] = $task;
    $i++;
  }
  
}





  
  echo '<pre>';
  var_dump($_SESSION);
  echo '</pre>';

} else {
  // error
}

?>