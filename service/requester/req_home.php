<?
    
    session_start();
    include '../include/dbcon.php';
    if(!isset($_SESSION['req_email']))
    {
      include '../include/exit.php';
    }
 
    include '../include/head.php';   
?>
        <script src='../js/page_action.js'></script>
        <title>Profile</title>
        <link href='../css/common.css' rel='stylesheet'>
        <link href='../css/profile.css' rel='stylesheet'>
      <!--  <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->
    </head>
    <body>
            <div class='header'>
                 <? include '../include/header.php' ?>
            </div>
            <div class='container'><!-- start container -->
                <div class='side left'><!-- start side bar 1 -->
                    <? include 'req_home_nav.php' ?>
                </div><!-- end side bar 1 -->
                <div id='right_side' class='side '><!-- start side bar 2 -->

                    <iframe name='frame' class= 'right' src='req_profile.php'>
                       
                    </iframe>

                </div><!-- end side bar 2 -->
            </div><!-- end cotainer -->
    </body>
</html>

