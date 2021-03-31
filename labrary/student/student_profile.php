<?
include "../include/dbcon.php";
session_start();     
if($_SESSION['card'])
    {
     $card=$_SESSION['card'];
     $query="SELECT * FROM login Where card_no='$card'";  
     $run=$dbcon->query($query);
     if($run->num_rows==1)
     {
         $data=$run->fetch_assoc();
         $name=$data['name'];
         $id=$data['id'];
         $roll=$data['roll'];
         $branch=$data['branch'];
     }

    }
    include "../include/head.php"
 
?>
<link href='../css/common.css' rel='stylesheet'>
</head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>Profile</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Reg.No</th>
                    <td><input type="text" value="<?echo $id?>" readonly></td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td><input type="text" value="<?echo $name?>"></td>
                </tr>
                <tr>
                    <th>Branch</th>
                    <td><input type="text" value="<? echo $branch?>"></td>
                </tr>
                <tr>
                    <th>Roll No.</th>
                    <td><input type="text" value="<? echo $roll?>" readonly></td>
                </tr>

            </tbody>
            <tfoot>
                <tr>
                    <th>
                    </th>
                    <td>
                        <input type="submit" value="Update">
                    </td>
                </tr>
            </tfoot>
        </table>
    </body>
</html>