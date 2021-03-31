 
<?
        session_start();
        include '../include/dbcon.php';  
        $email=$_SESSION['req_email'];

        if(isset($_POST['update']))
        {
            $req_pass=$_POST['user_name'];
            $query="UPDATE requester_login SET req_pass='$req_pass' WHERE req_email='$email' ;";
            $run=$dbcon->query($query);
            if($run)
            {
                echo "<script>alert('Update Success')</script>";
                unset($_POST['update']);
            }

        }
        
        include '../include/select_all.php';
        $data=select_all($email);
        if($data)
        {
            $req_pass=$data['req_pass'];
        }
        else{
            echo "not runnin";
            $req_pass='';
        }

        include '../include/head.php';  
?>
   <title>Profile</title>
   <link href='../css/common.css' rel='stylesheet'>
   <link href='../css/form.css' rel='stylesheet'>
   
   </head>
   <body>
       <form action="ch_pass.php" method='post'>
               <label for="email">Email</label>
               <input id='email'type="email" value='<?echo $email?>' readonly>
               <label for="pass">Password</label>
               <input  id='pass'type="text" value='<?echo $req_pass?>'name='user_name' required autocomplete="OFF">
               <input type="submit" value='Update' name='update'>
       </form>   
   </body>
</html>

