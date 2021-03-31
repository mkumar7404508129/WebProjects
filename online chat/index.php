<!DOCTYPE html>
<html lang="en">
<head>
    <link href="./bootsrap/f.css" rel='stylesheet'>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <section>
        <?php
        include "php/header.php";
        ?>
        </header>
        
               <h3>Enter detail provided to You:</h3>
               <form action="./redirect/login.php" method="post">
                    <fieldset>
                        <p>
                        <legend>Email:</legend>
                        <input type="email" name="email" placeholder="Enter email">
                        </p>
                        <p>
                        <legend> Password</legend>
                            <input type="password" name="password" placeholder="password">
                        </p>
                        <input type="submit" name="submit" value="login">


                    </fieldset>
               </form> 
               </section>
        <?php
        include "php/footer.php";
        ?>
        
</body>
</html>