<?php

include "../dbcon.php";
$id=$_SESSION['id'];
$query="SELECT * FROM `aplicant` WHERE id=$id;";
$run=$dbcon->query($query);
$data=$run->fetch_assoc();
$_SESSION['userdata']=$data;

include '../html/head.html';


?>
<link href="../css/user.css" rel="stylesheet">
</head>
<body>
 <table align="center" border="1">
    
    <tr>
        <td>
            Name:
        </td>
        <td>
        <?php echo $data['first']." ".$data['middel']." ".$data['last'];?>
        </td>
    </tr>
    <tr>
        <td>
            D.O.B:
        </td>
        <td>
        <?php echo $data['dob'];?>
        </td>
    </tr>
    <tr>
        <td>
            contact:
        </td>
        <td>
        <?php echo $data['phone'];?>
        </td>
    </tr><tr>
        <td>
            Qulification:
        </td>
        <td>
        <?php echo $data['qualification'];?>
        </td>
    </tr><tr>
        <td>
            Father's Name:
        </td>
        <td>
        <?php echo $data['ffirst']." ".$data['fmiddel']." ".$data['flast'];?>
        </td>
    </tr>
 </table> 
</body>