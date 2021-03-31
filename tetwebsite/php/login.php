<?php

if(isset($_POST["login"]))
   { session_start();
     
     if($_POST["captcha"]===$_SESSION["captcha"])
     {
         include "../dbcon.php";
         $email=$_POST['email'];
         $password=$_POST['password'];
         
         $query="SELECT admin,id FROM login WHERE Email='$email' and Password='$password';";
         
         $run=$dbcon->query($query);
          if($run->num_rows==1)
          { 
            
            $data=$run->fetch_assoc();
            $_SESSION['id']=$data['id'];
            if($data['admin']==1)
            {   
                $_SESSION['admin']=1;
                header("location:./useradmin.php");
                
            }
            else{
                $_SESSION['admin']=0;
                header("location:./useradmin.php" );
                }
          }
          else{
              echo "Record not found";
              }
        }
     else{ 
        header("location:../index.html");
         echo "captcha not match";
         
     }
   }
?>
<?php
    include "../html/head.html";

?>
<link href="../css/login.css" rel="stylesheet">
</head>
<body>
       <form target="_parent" action="login.php" method="POST">
           <fieldset>
               <legend>Enter Details</legend>
               <p>
                   <label for="email">Email:</label>
                   <br>    
                   <input type="email" id="email" placeholder="email" name="email" required>  
               </p>
               <p>
                   <label for="password">Password:</label>
                   <br>    
                   <input type="password" id="password" placeholder="password" name="password" required>  
               </p>
               <img src="captcha.php" alt="">
               <input type="text" placeholder="captcha" name="captcha" required>
               <input type="submit" name="login" value="login">
               <a href="register.php" target="home" >New Registration</a>
               <br>
               <a href="">Forget Password?</a>
               
            </fieldset>

       </form>       
</body>
</html>
<?php
    
  