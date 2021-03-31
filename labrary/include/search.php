<?  
    include "./dbcon.php";

    $name=$_GET['name'];
    $query="SELECT * FROM login WHERE name='$name'";

    $run=$dbcon->query($query);
    
    if($run->num_rows >=1)
    {
        echo 1;
    }
    else 
    {
        echo 0;
    }  
?>