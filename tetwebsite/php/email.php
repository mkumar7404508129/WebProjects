
<?php   if(!isset($_POST["submit"]))
        {   
            include "../mail/mail.php";        
            include "../html/head.html";
    ?>
        </head>
        <body>
            <form target="_parent"action="email.php" method="POST">
                <input type="text" placeholder="Enter OTP" name="emailcode">

                <input type="submit" value="OTP" name='submit'>
            </form>
        </body>
        </html> 
    <?php
        }
        else{
            
            session_start();
             if($_POST['emailcode']===$_SESSION['emailcode'])
             {                  
               
                include "./run.php";
                   
             }
             
            }
        ?>
        