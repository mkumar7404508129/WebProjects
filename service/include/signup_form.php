<form action="" method='post'>
    <fieldset>
        <legend>
            <h3>Create An Account</h3>
        </legend>
        <p>
            <label for="name">User Name</label>
            <input id='name' name='name' 
            type="text" placeholder='ex: Nripender' required>
        </p>
        <p>
            <label for="email">Email:</label>
            <input id='email' name='email' 
            type="email" placeholder='abc@gmail.com' required>
        </p>
        <p>
            <label for="password">New Password:</label>
            <input id='password' name='password' 
            type="password" placeholder='Password' required>
        </p>
        <input type="submit" name='signUp' 
        value='SignUp'>                                                
    </fieldset>
</form>

<?
    if(isset($_POST['signUp']))
    {
        $req_name=$_POST['name'];
        $req_email=$_POST['email'];
        $req_pass=$_POST['password'];

        $query="SELECT * FROM requester_login WHERE req_email='$req_email';";
        $run=$dbcon->query($query);
        if($run->num_rows)
        {
            echo "<script>alert('allready exits')</script>";
            echo "<script>window.open('./','_self')</script>";
            exit;
        }
        
        else
        {
            $query="INSERT INTO requester_login(req_name,req_email,req_pass) VALUES('$req_name','$req_email','$req_pass');";
            $run=$dbcon->query($query);
            if($run)
            {
                echo "<script>alert('Register Success Full')</script>";
            }
            
        }

     
        
    }
?>