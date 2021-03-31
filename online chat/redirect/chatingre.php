<?php

    if(isset($_POST['send']))
    {   
        session_start();
        $message=$_POST['message'];
        $name=$_SESSION['Name'];
        $query="INSERT INTO chat values('$name','$message');";
        include '../php/dbcon.php';
        $run=$dbcon->query($query);
        if($run)
        {
            header('location:../php/chating.php');
        }
    
    }
?>