<?php

   if(isset($_POST['btn-send'])){

     $username = $_POST['username'];
     $email = $_POST['email'];
     $subject = $_POST['subject'];
     $msg = $_POST['msg'];

     if(empty($username) || empty($email) || empty($subject) || empty($msg))
     {
          header('location: index.php?error');
     }
     else{
         $to = "adnanfaruque23@gmail.com";

         if(mail($to,$subject,$msg,$email))
         {
             header('location: index.php?success');
         }
     }

   }
   else
    {
       header('location: index.php');
    }


?>