<?php session_start(); 

 // Get data from json file.
  $jsonTasks = file_get_contents($_SERVER['DOCUMENT_ROOT']."/data/tasks.json"); 
  $jsonUsers = file_get_contents($_SERVER['DOCUMENT_ROOT']."/data/users.json"); 
  // Convert json data to PHP array.
  $tasksData =  json_decode($jsonTasks, TRUE);   
  $usersData =  json_decode($jsonUsers, TRUE);  



  //merge tasks and users
  $mergedTaskUserData = array();
  foreach ($tasksData as $item1) {
      foreach ($usersData as $item2) {
          if ($item1["userUID"] == $item2["uid"]) {
              unset($item2["uid"]);
              $mergedTaskUserData[] = array_merge($item1, $item2);
          }
      }
  }

  // echo '<pre>';
  // var_dump($mergedTaskUserData);
  // echo '</pre>';

//sort array based on reward #
function sortByReward($a,$b){
  if ($a['reward'] == $b['reward']){
    return 0;
  }
  return ($a['reward'] < $b['reward']) ? 1 : -1; // 1 if true -1 if false
}


$cssFiles = 
  '
<!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/resources/templateFiles/css/styles.css" rel="stylesheet" />
  ';

$jsFiles = '
</footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="templateFiles/js/scripts.js"></script>
 ';

$nav = ' <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-lg-5">
                <a class="navbar-brand" href="#!">New ToDo Maneger</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/tasks.php">Tasks</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Search</a></li>
                    </ul>
                </div>
            </div>
        </nav>';

$footer = ' <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>';

?>
