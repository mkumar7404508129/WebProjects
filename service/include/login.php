<? 
    session_start();
    include './dbcon.php';
   
    function error($user)
    {
        echo "<script>alert('Not Vailed user')</script>";
        echo "<script>window.open('../include/login.php?user=$user','_self')</script>";  
        exit;
    }
    if(isset($_POST['login']))
    {   
        $user=$_GET['user'];
        $email=$_POST['email'];
        $pass=$_POST['password'];
        $query="SELECT * FROM requester_login WHERE (req_email='$email' and req_pass='$pass');";
      
        $run=$dbcon->query($query);
        if($run->num_rows==1)
        {
            $data=$run->fetch_assoc();
            if($data['admin']==0)
            {
                if($user=='Requester')
                {   
                    $_SESSION['req_email']=$email;
                    echo "<script>window.open('../requester/req_home.php','_self')</script>";
                    exit;
                }
                else{
                    error($user);
                }
            
            }
            if($data['admin']==1)
            {   
                if($user=='Admin')
                {   
                    $_SESSION['ad_email']=$email;
                    echo "<script>window.open('../admin/admin_home.php','_self')</script>";
                    exit;
                }
                else{
                   error($user); 
                }
            }
        }
        else{
            error($user);
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG IN</title>
    <link href="../css/common.css" rel='stylesheet'>
    <link href='../css/login.css' rel='stylesheet'>
</head>
<body>
        <div class='container'>
            <a href="../">Home</a>
            <div class='card'>
                <h1> Service Center </h1>
                <div class='form'>
                    
                    <form action="./login.php?user=<?echo $_GET['user']?>" method="post">
                       <fieldset>
                            <legend><h3> <? echo $_GET['user'].' '.'Login'?></h3></legend>
                            <input type="email" name='email'
                            placeholder='Email' required>
                            <input type="password" name='password'
                            placeholder='Password' required>
                            <input type="submit" value='Login'name="login">
                       </fieldset>
                    </form>
                </div>
            </div>
        </div>    
</body>
</html>
<?
if(!isset($_GET['user']))
    {
      echo '<script>window.close()</script>';
    }
?>