<?
        session_start();
        include '../include/dbcon.php';  
        $email=$_SESSION['req_email'];
        include '../include/head.php';  
?>
   <title>Profile</title>
   <link href='../css/common.css' rel='stylesheet'>
   <link href='../css/form.css' rel='stylesheet'>
   
   </head>
   <body>
       <form action="ser_status.php" method='post'>
               <input type="search" name='req_id'
                placeholder='Enter Req_id'>
               <input type="submit" value='Search' name='search'>
       </form>   
   </body>
</html>
<?
if(isset($_POST['search']))
    {
        $req_id=$_POST['req_id'];
        $query="SELECT * FROM request WHERE (req_id='$req_id');";
        
    }
    else{
        include '../include/select_all.php';
        $data=select_all($email);
        $req_id=$data['id'];
        $query="SELECT * FROM request WHERE (req_sender_id='$req_id')";
    }
    
    $run=$dbcon->query($query);
    if($run->num_rows >=1)
    {
        $data=$run->fetch_assoc();
        print_r($data);
    }
    else
    {
        echo "not Run";
    }

?>