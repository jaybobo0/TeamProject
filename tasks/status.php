<?php /*1st Line on every webpage.*/ include $_SERVER['DOCUMENT_ROOT'].'/functions.php'; 


// echo '<pre>';
// var_dump($_SESSION['statusUpdate']);
// echo '</pre>';

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Edit</title>
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
                        <h1 class="display-5 fw-bold">Edit Status</h1>
                        <form action="" method="post">
                          <label>Update Status</label>
                          <br>
                          <select naem="statusOption">
                            <option value="0">Choose a status</option>
                            <option value="completed">completed</option>
                            <option value="canceled">canceled</option>
                          </select>

                          <button type="submit" formaction="/redirects/status.php">Submit to another page</button>
                        

                        </form>
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">User</th>
                            <th scope="col">Catagory</th>
                            <th scope="col">Due Date</th>
                            <th scope="col">Title</th>
                            <th scope="col">Value</th>
                            <th scope="col">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <?php 
                              echo '<td>'.$_SESSION['statusUpdate']['fName'].'</td>';
                              echo '<td>'.$_SESSION['statusUpdate']['categories'].'</td>';
                              echo '<td>'.$_SESSION['statusUpdate']['dateDeadline'].'</td>';
                              echo '<td>'.$_SESSION['statusUpdate']['title'].'</td>';
                              echo '<td>'.$_SESSION['statusUpdate']['reward'].'</td>';
                              echo '<td>'.$_SESSION['statusUpdate']['categories'].'</td>';
                            ?>                                                                  
                          </tr>
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </header>
        <!-- Page Content-->
        <section class="pt-4">
            <div class="container px-lg-5">
                <!-- Page Features-->
                <div
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
          <!-- footer -->
          <?php echo $footer; ?>
          
        <?php echo $jsFiles; ?>
    </body>
</html>
