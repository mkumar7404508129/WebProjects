<?
     include '../include/head.php';
?>
    <link rel='stylesheet' href='../css/common.css'>
    <link rel='stylesheet' href='../css/adm_dash.css'>

    <title>Dashbord</title>
    </head>
    <body>
        <div class='upper'> <!-- upper-div start -->
            <div class='card'><!-- req_recive start-->
                <div class='head'><!-- req_recive head-->
                    <h3>Requests Received</h1>
                </div> <!-- req_recive head end-->
                <div class='data'><!-- req_recive data-->
                    <h3>52</h3>
                    <a href="#">view</a>
                </div> <!-- req_recive data end-->
            </div><!-- req_recive end-->

            <div class='card'> <!-- assign_work start-->
                <div class='head'><!-- req_recive head-->
                    <h3>Assigned Work</h3>
                </div> <!-- req_recive head end-->
                <div class='data'><!-- req_recive data-->
                    <h3>52</h3>
                    <a href="#">view</a>
                </div> <!-- req_recive data end-->

            </div> <!-- assign_work end-->
            <div class='card'> <!-- no_tech start-->
                <div class='head'><!-- req_recive head-->
                    <h3>No. of Technician</h3>
                </div> <!-- req_recive head end-->
                <div class='data'><!-- req_recive data-->
                <h3>1</h3>
                    <a href="#">view</a>
                </div> <!-- req_recive data end-->
            </div> <!-- no_tech end-->
        </div> <!-- upper div end -->
        <div class='low'> <!-- low div start -->
            <h2>List of Request</h2>
            <table>
                <thead>
                    <tr>
                        <th>Request ID</td>
                        <th>Name</td>
                        <th>Email</td>
                    </tr>
                </thead>
                <tbody>
                        <? include '../include/select_all.php';
                            $run=select_all('','');
                            while($data=$run->fetch_assoc())
                            {
                                print_r($data);
                            }
                            
                        ?>
                        <tr>
                            
                        </tr>
                </tbody>
                <tfoot>

                </tfoot>
            </table>
        </div> <!-- low div end -->
    </body>
</html>