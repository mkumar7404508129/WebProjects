<?php
    session_start();
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chatting room</title>
    <link   href="../bootsrap/chating.css"  rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <div>
            <?php 
            include "./header.php"
            ?>
            </header>
        </div>
        <div class="head">
            <div class="logout">
                <form id="logout" action="../redirect/distroy.php" method="POST">
                    <input type="submit" value="Logout" name='logout'>
                </form>
            </div>
            <div class="isonline">
                    <h3> <?php 
                    foreach($_SESSION as $name){
                        echo $name;
                    }?> is online</h3> 
            </div>
            <div class="chatbox">
               
                <div class="chats">
                        <?php
                            include './message.php';
                        ?>
                </div>    
            </div>
            <div class="message">
                <form action="../redirect/chatingre.php" method="POST">
                    <p>
                    <textarea type="text" id="text" name="message" ></textarea>
                    <br>
                    <input type="submit" name="send" id="send"value="send">
                    </p>
                </form>
            </div>

        </div>
        <div class="footer">
            <?php
                include "./footer.php";
            ?>
                </footer>
        </div>
    </div>
</body>
</html>