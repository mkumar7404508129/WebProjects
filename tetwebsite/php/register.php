<?php
    session_start();
if(isset($_POST['register']))
{
    if($_SESSION['captcha']===$_POST['captcha'])
    {     $password=$_POST['password'];
        if($password===$_POST['cpassword'])
        {
            
           
            $_SESSION['password']=$_POST['password'];
            $_SESSION['fName']=$_POST['fName'];
            $_SESSION['mName']=$_POST['mName'];
            $_SESSION['lName']=$_POST['lName'];
            $_SESSION['email']=$_POST['email'];
            include "./email.php";

            

        }
        else{
            echo "password not match";
        }
    }
     else{
         echo "not match";
     }

}
else
{
?>
<?php
include "../html/head.html";
?>
</head>
<body>
    
    <form target="_self" action="register.php" method="POST">  
        <fieldset>
            <legend>Register Your self</legend>
            <p>Name:
                <br>
                <input type="text" name="fName"  placeholder="First Name" required>
                <input type="text" name="mName" placeholder="Middel Name">
                <input type="text" name="lName" placeholder="Last Name">
            </p>
            
            <p>
                Email:
                <br>
                <input type="email" name='email' required>
            </p>
            <p>
                Password:
                <br>
                <input type="password" name='password' placeholder="Passwod" required>
            </p>  
            <p>            
                <input type="password" name='cpassword' placeholder="Confirm Password" required>
            </p> 
            <p>
                <img src="captcha.php" alt="">
                <br>
                <input type="text" placeholder="Captcha" name="captcha" required>
            </p>
           
            <input type="submit" value="Register" name='register'>
            
        </fieldset>
       
    </form>
    
</body>
</html>
<?php
}?>