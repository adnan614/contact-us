<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Bootstrap Js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>

    <title>Contact Us Form</title>
</head>
<body>
<div class="container">
 <div class="row">
    <div class="col-lg-6 m-auto">
         <div class="card mt-5">
            <div class="card-title">
                <h2 class="text-center py-2">Contact Us</</h2>
                <hr>
                <?php
                  $msg = "";
                  if(isset($_GET['error']))
                  {
                      $msg = " Please Fill in the Blanks ";
                      echo '<div class="alert alert-danger">'.$msg.'</div>';
                  }

                  if(isset($_GET['success'])){
                    $msg = " Your Message Has Been Send ";
                    echo '<div class="alert alert-danger">'.$msg.'</div>';
                  }

                ?>
            </div>
            <div class="card-body">
                <form action="process.php" method="post">
                    <input type="text" name="username" placeholder="username" class="form-control mb-2" >
                    <input type="email" name="email" placeholder="Email" class="form-control mb-2" >
                    <input type="text" name="subject" placeholder="Subject" class="form-control mb-2" >
                    <textarea name="msg" class="form-control" placeholder="Write The Message"></textarea>
                    <button class="btn btn-success" name="btn-send"> Send </button>
                </form>

            </div>

         </div>
    </div>
 </div>
</div>
    
</body>
</html>

