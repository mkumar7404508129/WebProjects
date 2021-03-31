<?php include './include/head.php' ?>
<?php include './include/dbcon.php'?>
    <title>Service</title>
    <link href="./css/common.css" rel='stylesheet'>
    <link href="./css/index.css" rel='stylesheet'>
</head>
<body>
    <div class="container">
        <div class="header">
            <!-- header is included here -->
            <? include './include/header.php' ?>
            <!-- header is end here --> 
            <nav>
                <ul>
                    <li><a href="#">Home </a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#signup" >Register </a></li>
                    <li><a href="./include/login.php?user=Requester" 
                    target='_parent'>Login </a></li>
                    <li><a href="#contact">Contact </a></li>
                </ul>
            </nav>
        </div>
        <hr>
        <div class='image'>
            <div class='welcome'>
            <h1>WELCOME TO SERVICE</h1>
            <p>Customer Happiness IS Our Aim</p>
            </div>
            <div class="button">
                <a href='#'>Login</a>
                <a href='#'>Sign Up</a>
            </div>

        </div>
        <hr>
        <div class='idea'>
            <h3>SERVICE</h1>
            <p>Service is what basically everyone does for 
            a living, some people do it for money, and some 
            do it out of the kindness of their heart. ... 
            I have never actually sat down and thought about 
            the word service but now that I have it has vast 
            meanings I never realized.</p>
        </div>
        <hr>
        <!-- Here all service are present -->
        <div id='services' class='services'>
            <h3>Our Services</h3>
            <span class='item'>
                <a href="#">
                <img src="https://image.flaticon.com/icons/svg/31/31106.svg" alt="tv">
                </a>
                <h4>Tv repair</h4>
            </span>
            <span class='item'>
                <a href="#">
                    <img src="https://image.flaticon.com/icons/svg/769/769198.svg" alt="Maintain">
                </a>
                <h4>Maintainance</h4>
            </span>
            <span class=item>
               <a href="#">
                    <img src="https://www.seekpng.com/png/detail/114-1145502_28-collection-of-home-delivery-clipart-delivery-boy.png" alt="delivery">
                </a>
                <h4>Home Deliver</h4>
            </span>
        </div>
        <!-- Service end --->

        <hr>
        <!-- Signup Page -->
        <div id='signup'class='signup'>
         <? include './include/signup_form.php' ?> 
        </div>
        <hr>
        <!-- End-->
        <div class='customer'>
            <h3>Happy Customer</h4>
            <div class='review'>
                <img src="./image/pic1.jpeg" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Dolores porro perferendis in voluptas, fugit ad repellendus nihil 
                similique ducimus pariatur provident culpa recusandae odio atque vel?
                    Dignissimos maiores consequuntur illum.</p>
            </div>
            <div class='review'>
                <img src="./image/pic2.jpeg" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Dolores porro perferendis in voluptas, fugit ad repellendus nihil 
                similique ducimus pariatur provident culpa recusandae odio atque vel?
                    Dignissimos maiores consequuntur illum.</p>
            </div>
            <div class='review'>
                <img src="./image/pic3.jpeg" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Dolores porro perferendis in voluptas, fugit ad repellendus nihil 
                similique ducimus pariatur provident culpa recusandae odio atque vel?
                    Dignissimos maiores consequuntur illum.</p>
            </div> 
            <div class='review'>
                <img src="./image/pic4.jpeg" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Dolores porro perferendis in voluptas, fugit ad repellendus nihil 
                similique ducimus pariatur provident culpa recusandae odio atque vel?
                    Dignissimos maiores consequuntur illum.</p>
            </div>            

        </div>  
        <hr>
        <div id='contact' class='contactus'>
                <h3> Contact Us</h3>
                <div class='report'>
                 <!-- contect form start -->
                    <?php include './include/contect_form.php'?>
                    <!-- form end -->
                </div>
            
                <div class='address'>
                    <address>
                        <h3>Headquarter</h3>
                            22/232 Chabri Bazzar
                            <br>
                            New Delhi
                            <br>
                            India
                    </address>
                    <address>
                        <h3>Branch</h3>
                            22/253 
                            <br>
                            Mahavir Park
                            <br>
                            Bahadurgarh
                            <br>
                            Haryana
                    </address>
                </div>
        </div>
        <hr>
        <div class='footer'>
            <?php include './include/footer.php'; ?>
        </div>
    </div>
</body>
</html>