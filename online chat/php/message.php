<?php
    if(isset($_SESSION['Name']))
    {
        
        $page = $_SERVER['PHP_SELF'];
        $sec = "30";
        header("Refresh: $sec; url=$page");
        $query="SELECT * FROM chat";
        include "./dbcon.php";
            $run=$dbcon->query($query);
            while($data=$run->fetch_assoc())
            {
               if($data['Name']==$_SESSION['Name']) 
               {
                    ?>
                    <div style="float:right;color:blue;clear:both;border:1px green solid;background:gray">
                    <?php
                    echo "<h4>".$data['Name'].": ".$data['chats']."</h4><br>";
                    ?>
                    </div>
                    <?php
               }
               else{
                ?>
                <div style="float:left;color:blue;clear:both;border:1px green solid;background:pink">
                <?php
                echo "<h4>".$data['Name'].": ".$data['chats']."</h4><br>";
                ?>
                </div>
                <?php
               }

                
            }

    }
    else
    {
        echo "no session set";
    }
?>