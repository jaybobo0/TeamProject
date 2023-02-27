<?php /*1st Line on every webpage.*/ include $_SERVER['DOCUMENT_ROOT'].'/functions.php';

$h = 0;
  
$p = 0;
  
$i = 0;
foreach($tasksData as $task){
  
  if($task['categories'] == "home work" ){
    $h++;
    
  }
  
  if($task['categories'] == "project" ){
    $p++;
    
  }


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
                                <h2 class="fs-4 fw-bold">Simple clean code</h2>
                                <p class="mb-0">We keep our dependencies up to date and squash bugs as they come!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-patch-check"></i></div>
                                <h2 class="fs-4 fw-bold">A name you trust</h2>
                                <p class="mb-0">Start Bootstrap has been the leader in free Bootstrap templates since 2013!</p>
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