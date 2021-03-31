    <? define("use","index");
    session_start();
    include "./include/dbcon.php";
    include "./include/head.php"?>
    <script src="./js/form.js"></script>
    <script src="./js/common.js"></script>
    <link rel="stylesheet" href="./css/common.css">
    <link rel="icon" href="./img/vicon.jpeg">
</head>
<body>
    <div class="container"> <!-- container start-->
        <!--Header start-->
        <? include "./include/header.php";?>
         <!--Header end-->

         <section class="labrary">
        <!--Nav start-->
        <div class="top_nav">
            <img onclick="drop()" src="./img/menu.png" alt="">
            <nav>
                <ul id="dpdown">
                    <li><a  href="./">Home</a></li>
                    <li><a  href="#">About</a></li>
                    <li><a  href="#contact">Contact Us</a></li>
                    <li><a  href="#sign">Sign In</a></li>
                </ul>
            </nav>
        </div>
        <!--Nav end-->
        
            <?php include "./student/req_search.php"?>
            
        </section>
        <section class="facility">
            <a href=""><img src="./img/online.jpeg" alt="book" title="pic 1"> </a>
            <a href=""><img src="./img/music.png" title='pic 2' alt=""></a>
            <a href=""><img src="/img/bk3.jpeg" title='pic 3'alt=""></a>
        </section>
        <section id="sign">
            <?include "./student/login.php" ?>
        </section>
        <!-- footer start-->

            <? include "./include/foot.php" ?>
        <!-- footer end -->    
    </div><!-- container end-->
</body>
</html>