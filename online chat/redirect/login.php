<?php
   if( isset($_POST['submit']))
    {
        $email=$_POST['email'];
        $password=$_POST['password'];
        $query="SELECT * FROM login WHERE email='$email' and password='$password';";
        include "../php/dbcon.php";
        $run=$dbcon->query($query);
        if($run->num_rows==1)
        {  
             $data=$run->fetch_assoc();
             session_start();
             $_SESSION['Name']=$data['Name'];
             header('location:../php/chating.php');    
        }
    }
    else{
        echo "error occur";
    }
 ?>