
<?php
session_start();
include "../html/head.html";
?>
<link href="../css/nav.css" rel="stylesheet">
</head>
<body>
    <header>
        <div id="top">
            <img src="../webimage/Sikkim-cover.jpg" alt="" height="100px" width="60px">
            <h1>Teacher Eligibility Test</h1>
        </div>

        <div id="login">
            <a href="../distroy.php" target="_parent">
                <img src="../webimage/login.png" alt="" >
                <br>
                logout
            </a>
         </div>

    </header>
<?php
    if($_SESSION['admin'])
    {
        include "../admin/html/adminnav.html";
        include "../user/userfirst.php";
    }
    if(!$_SESSION['admin']){
        include "../user/usernav.html";
        include "../user/userfirst.php";

    }

?>
   

    
</body>
</html>
