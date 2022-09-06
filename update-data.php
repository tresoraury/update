<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>web learning</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
      
       <div class="container">
        <div class="row justify-content-center">
           <div class="col-md-8">

           <?php

                  if(isset($_SESSION['status']))
                  {
                    echo "<h4>".$_SESSION['status']."</h4>";
                    unset($_SESSION['status']);
                  }

                  ?>

            <div class="card mt-5">
                        <div class="card-header">
                          <h4>Update data php mysql</h4>
                      </div>
                        <div class="card-body">
                        <form action="code.php" method="POST">

                         <div class="form-group mb-3">
                        <label for="">Student ID</label>
                        <input type="text" name="stud_id" class="form-control" >
                        </div>
                        <div class="form-group mb-3">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control" >
                        </div>
                        <div class="form-group mb-3">
                        <label for="">Class</label>
                        <input type="text" name="class" class="form-control" >
                        </div>
                        <div class="form-group mb-3">
                        <label for="">Phone No.</label>
                        <input type="text" name="phone" class="form-control" >
                        </div>
                        <div class="form-group mb-3">
                        <button type="submit" name="update_stud_data" class="">Update Data</button>
                        </div>

                </form>
            </div>
           </div>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>