<?php /*1st Line on every webpage.*/ include $_SERVER['DOCUMENT_ROOT'].'/functions.php'; ?>

<!-- Get User Names from UID -->
  <?php

  
  $result = array();
  
  foreach ($tasksData as $item1) {
      foreach ($usersData as $item2) {
          if ($item1["Name"] == $item2["Name"]) {
              unset($item2["UID"]);
              $result[] = array_merge($item1, $item2);
          }
      }
  }
  
  // echo '<pre>';
  // var_dump($result);
  // echo '</pre>';

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
                <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                    <div class="m-4 m-lg-5">
                        <h1 class="display-5 fw-bold">Filter Tasks</h1>
                        <p class="fs-4">Form Goes Here</p>
                        <a class="btn btn-primary btn-lg" href="#!">Filter</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- Page Content-->
        <section class="pt-4">
            <div class="container px-lg-5">
                <!-- Page Features-->
              
<section class="py-5">
            <div class="container px-lg-5">
                <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                    <div class="m-4 m-lg-5">
                        <h1 class="display-5 fw-bold">A warm welcome!</h1>
                        <p class="fs-4">Bootstrap utility classes are used to create this jumbotron since the old component has been removed from the framework. Why create custom CSS when you can use utilities?</p>
                                                <!-- Table -->
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">User</th>
                            <th scope="col">Catagory</th>
                            <th scope="col">Due Date</th>
                            <th scope="col">Title</th>
                            <th scope="col">Value</th>
                          </tr>
                        </thead>
                        <tbody>
                                            <?php 
                                              foreach($result as $key => $task){
                                                echo '<tr>
                                                        <th scope="row">1</th>
                                                        <td>'.$task['fName'].' '.$task['lName'].'</td>
                                                          <td>'.$task['categories'].'</td>
                                                        <td>'.$task['dateDeadline'].'</td>
                                                        <td>'.$task['title'].'</td>
                                                        <td>Value</td>
                                                      </tr>';
                                              }
                                              
                                            ?>
                        </tbody>
                      </table>
                                         <!--   End Table -->
                    </div>
                </div>
            </div>
        </section>


              
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
          <!-- footer -->
          <?php echo $footer; ?>
          
        <?php echo $jsFiles; ?>
    </body>
</html>
