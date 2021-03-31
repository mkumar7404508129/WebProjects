<?
    session_start();
    include '../include/dbcon.php';  
    $email=$_SESSION['req_email'];

    if(isset($_POST['update']))
    {
        $req_name=$_POST['user_name'];
        $query="UPDATE requester_login SET req_name='$req_name' WHERE req_email='$email' ;";
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
        $req_name=$data['req_name'];
    }
    else{
        echo "not runnin";
        $req_name='';
    }

    include '../include/head.php';  
?>
    <title>Profile</title>
    <link href='../css/common.css' rel='stylesheet'>
    <link href='../css/form.css' rel='stylesheet'>
    
    </head>
    <body>
        <form action="req_profile.php" method='post'>
                <label for="email">Email</label>
                <input id='email'type="email" value='<?echo $email?>' readonly>
                <label for="pass">Use_name</label>
                <input  id='pass'type="text" value='<?echo $req_name?>'name='user_name' required autocomplete="OFF">
                <input type="submit" value='Update' name='update'>
        </form>   
    </body>
</html>