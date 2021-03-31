<?function select_all($email,$pass='')
        {
            include '../include/dbcon.php';
            if($email!='' and $pass !='')
            {
                $query="SELECT * FROM requester_login WHERE (req_email='$email' and req_pass='$pass');";
            }
            else if($email!='' and $pass == '')
            {
                $query="SELECT * FROM requester_login WHERE (req_email='$email');";
            }
            else if($email=='' and $pass=='')
            {
                $query=$query="SELECT * FROM requester_login;";
            }
            $run=$dbcon->query($query);
            if($run->num_rows==1)
            {
                $data=$run->fetch_assoc();
                return $data;
            }
            else if($run->num_rows >1)
            {
                return $run;
            }
            else 
            {
                return 0;
            }
            
        }


?>