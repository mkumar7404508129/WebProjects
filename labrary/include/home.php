<? 
    include "../include/head.php";
?>
    <script src="../js/common.js"></script>
    <link rel='stylesheet' href='../css/common.css'>
    <link rel='stylesheet' href='../css/home.css'>
  </head>
<body>
    <div class="container">
    <!-- header start -->
        <?include "../include/header.php"?> 
    <!-- header end -->      
    <section>
        <div class='left'>
        <img onclick="drop()" src="../img/menu.png" alt="">
            <nav>
                <? 
                include "../".page."/".page."_link.php";?>
            </nav>
        </div>
        <div class='right'>
            <iframe name='frame' src="./<?echo page?>_profile.php" frameborder="0"></iframe>
        </div>
    </section>


    <!-- footer start -->
        <? include "../include/foot.php"?>
    <!-- footer end -->
    </div>
</body>