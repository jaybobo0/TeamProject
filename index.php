<?php /*1st Line on every webpage.*/ include $_SERVER['DOCUMENT_ROOT'].'/functions.php';



$useUserUid = $o;

$h = 0; // each home work
  
$p = 0; //each project
  
$i = 0; // each task

$d = 0; 

$s = 0;// each task past due 604800

$sumOfRewards = 0;

$sumOfRewardshealth = 0;

$u =0; //each task from a user
  
foreach($tasksData as $task){ // START:: loop through all task data
                             
                    
$sumOfRewards = $sumOfRewards + $task['reward'];

                             
  if($task['categories'] == "home work" ){  // START:: count  health
                                          
    $sumOfRewardshealth = $sumOfRewardshealth = $task['reward'];
                                          
    $h++;
    
  }  // END:: count  health
  
  if($task['categories'] == "project" ){
    $p++;
    
  }
                             
  if($task['userUID'] == $selectedUser ){
    $u++;
    
  }

  if(strtotime($task['dateDeadline']) < strtotime(date("h:i:sa"))){  // START:: time compare 
    $d++;
    
  }
  // end:: time  compare
    if(strtotime($task['dateDeadline']) < strtotime(date("h:i:sa")) + 604800 && strtotime($task['dateDeadline']) > strtotime(date("h:i:sa")) -1){
    $s++;
    
  }

  
  

  $dateTest = $task['dateDeadline'];
  $i++;
}

$totalUsers = 0;
foreach($usersData as $users){
  $totalUsers++;
}



?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Heroic Features - Start Bootstrap Template</title>
      <?php echo $cssFiles; ?>
    </head>
    <body>
      <!-- Nav bar -->
       <?php echo $nav ?>
        <!-- Header-->
        <header class="py-5">
            <div class="container px-lg-5">
                <div class="p-4 p-lg-5 bg-light rounded-3">
                    <div class="m-4 m-lg-5">
                        <h1 class=" text-center display-5 fw-bold">A warm welcome!</h1>

                            <!-- form -->

                        <form class="row g-3" action="/redirects/task.php" method="post">
                          <div class="col-md-6">
                            <label  class="form-label">Title</label>
                            <input type="text" name="title" class="form-control">
                          </div>
                          <div class="col-md-6">
                            <label  class="form-label">Categories</label>
                            <input type="text" class="form-control" name="categories">
                          </div>
                          <div class="col-6">
                            <label  class="form-label">Reward</label>
                            <input type="text" class="form-control" name="reward" >
                          </div>
                          <div class="col-6">
                            <label  class="form-label">Date</label>
                              <br>
                              <input type="date" id="start" class="form-control" name="dateDeadline"
                                     value="2018-07-22"
                                     min="2018-01-01" max="2025-12-31">

                          </div>
                          <div class="col-6">
                            <label  class="form-label">Description</label>
                            <input type="text" class="form-control" name="description">
                          </div>
                          
                          <div class="col-6"> 
                            <label  class="form-label">User</label>
                            <select  id='user' name='user' class="form-select">
                            <option value='0' selected> Choose a user </option>
                            
                            <?php 

                            foreach ($usersData as $user){
                              echo '<option value="'.  $user['uid']. '">'.$user['fName'].' '.$user['lName']. '</option>'; 

                            }

?>
</select>
                          </div>
                         
                          <div class="col-12">
                            <label  class="form-label">TimeNeeded</label>
                            <input type="text" class="form-control" name="timeNeeded">
                          </div>
                          <div class="col-12">
                            <center><button type="submit" class="btn btn-primary">Sign in</button></center>
                          </div>
                        </form> 
                        <!-- form -->

                      
                      
                    </div>
                </div>
            </div>
        </header>
        <!-- Page Content-->
        <section class="pt-4">
            <div class="container px-lg-5">
                <!-- Page Features-->
                <div class="row gx-lg-5">
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-collection"></i></div>
                                <h2 class="fs-4 fw-bold">Count Data</h2>
                                <p class="mb-0">Total Tasks: <?php echo $i; ?> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-cloud-download"></i></div>
                                <h2 class="fs-4 fw-bold">Total Users</h2>
                                <p class="mb-0">Total Users:  <?php echo $totalUsers; ?> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-card-heading"></i></div>
                                <h2 class="fs-4 fw-bold">Category Counts</h2>
                                <p class="mb-0">Counts:<?php echo $p; ?> </p>
                                <p class="mb-0">RewardH: <?php echo $sumOfRewardshealth = $sumOfRewardshealth = $task['reward']; ?> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-bootstrap"></i></div>
                                <h2 class="fs-4 fw-bold">Homework count</h2>
                                <p class="mb-0">Counts:<?php echo $h; ?> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-code"></i></div>
                                <h2 class="fs-4 fw-bold">Tasks Past Deadlie</h2>
                              <p class="mb-0">task past due: <?php echo $d; ?></p>
                              <p class="mb-0">Due this week:<?php echo $s; ?> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-patch-check"></i></div>
                                <h2 class="fs-4 fw-bold">Rewards</h2>
                                <p class="mb-0"> <?php echo $sumOfRewards ."<br>";?> </p>


                                  <form method="get">
                                		<label for="selectOption">Select an Option:</label>
                                		<select name="selectOption" id="selectOption">
                                			<option value="todd">todd 1</option>
                                			<option value="billy">billy 2</option>
                                			<option value="jhon">Option 3</option>
                                		</select>
                                		<button type="submit">Submit</button>
                                	</form>
                                
                                	<?php 
                                		// Check if the form has been submitted
                                		if (isset($_GET["selectOption"])) {
                                			// Get the selected option value
                                			$selectedOption = $_GET["selectOption"];
                                
                                			// Set the variable based on the selected option
                                			if ($selectedOption == "todd") {
                                				$selectedUser = 101;
                                			} elseif ($selectedOption == "billy") {
                                				$selectedUser = 103;
                                			} elseif ($selectedOption == "jhon") {
                                				$selectedUser = 102;
                                			} else {
                                				$selectedUser = 0;
                                			} }
                                
                                			// Output the variable value
                                			echo "<p>Selected option: " . $selectedUser . "</p>"; ?>
                              
                                <p class="mb-0"> <?php echo "User ".$selectedUser." Has ". $u.' Tasks' ."<br>";?> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
          <!-- footer -->
          <?php echo $footer; ?>
          
        <?php echo $jsFiles; ?>
    </body>
</html>