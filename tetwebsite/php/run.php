<?php
              include "../dbcon.php";
              $email=$_SESSION['email'];
              $fName=$_SESSION['fName'];
              $mName=$_SESSION['mName'];
              $lName=$_SESSION['lName'];
              $password=$_SESSION['password'];
              
              $query1="INSERT INTO `login`(`Email`, `Password`) VALUES ('$email','$password');";
              $query2=" INSERT INTO `aplicant`(`first`, `middel`, `last`) VALUES ('$fName','$mName','$lName');";
              $run=$dbcon->query($query1);
               
               if($run)
               {
                    $run=$dbcon->query($query2);
                    if($run)
                    {
                        session_destroy();
                        header("location:../index.html");
                    }
               }
               else{
                   echo "somthing went wrong";
               }
    ?>
