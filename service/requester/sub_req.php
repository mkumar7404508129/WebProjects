<?      session_start();
        include '../include/dbcon.php';  
        $user=$_SESSION['req_email'];
        
        include '../include/head.php';  
?>
   <title>Profile</title>
   <link href='../css/common.css' rel='stylesheet'>
   <link href='../css/form.css' rel='stylesheet'>
   
   </head>
   <body>
       <form action="sub_req.php" method='post'>
               <label for="req_info">Request Info</label>
               <input name="req_info" id="req_info" 
               placeholder='Request Info'type="text" required>
               
               <label for="discription">Discription</label>
               <input  id='discription'type="text"name='description'
               placeholder='Discription' required autocomplete="OFF">
               
               <label for="name">Name</label>
               <input  id='name' type="text" name='name'
               placeholder='Rahul' required autocomplete="OFF">
               
               <label for="address1">Address Line 1</label>
               <input  id='address1' type="text"name='address1'
               placeholder='House No. 123' required autocomplete="OFF">

               <label for="address2">Address Line 2</label>
               <input  id='address2' type="text"name='address2'
               placeholder='Colonny' required autocomplete="OFF">

               <label for="city">City</label>
               <input  id='city' type="text"name='city'
               placeholder='' required autocomplete="OFF">

               <label for="state">State</label>
               <input  id='state' type="text"name='state'
               placeholder='' required autocomplete="OFF">

               <label for="pin">PIN</label>
               <input  id='pin' type="text"name='pin'
               placeholder='six digit no.' required autocomplete="OFF">

               <label for="email">Email</label>
               <input  id='email' type="email" name='email'
               placeholder='abc@gmail.com' required autocomplete="OFF">

               <label for="mobile">Mobile</label>
               <input  id='mobile' type="tel" name='mobile'
               placeholder="Mobile No" required>
              
               <label for="date">Date</label>
               <input  id='date' type="date"name='date'
               palceholder='' required autocomplete="OFF">

               <input type="submit" value='Submit' name='submit'>
               <input type="reset" name="reset" value='Reset' >
       </form>   
   </body>
</html>

<?
if(isset($_POST['submit']))
        {
            $req_info=$_POST['req_info'];
            $description=$_POST['description'];
            $name=$_POST['name'];
            $address1=$_POST['address1'];
            $address2=$_POST['address2'];
            $city=$_POST['city'];
            $state=$_POST['state'];
            $pin=$_POST['pin'];
            $email=$_POST['email'];
            $mobile=$_POST['mobile'];
            $date=$_POST['date'];
            include '../include/select_all.php';
            $data=select_all($user);
           
            $user_id=$data['id'];

            $query="INSERT INTO `request`( `req_info`,`req_discription`, `req_name`, `req_addr1`, `req_addr2`, `req_city`, `req_state`, `req_pin`, `req_email`, 
            `req_mobile`, `req_date`, `req_sender_id`) 
            VALUES ('$req_info','$description','$name','$address1','$address2','$city','$state','$pin',
            '$email','$mobile','$date','$user_id');";
            
            $run=$dbcon->query($query);
            if($run)
            {
                $ses=$dbcon->insert_id;
                $_SESSION['eid']=$ses;
                echo "<script>alert('Request Submit Successfull')</script>";
                echo "<script>location.href='./req_sucess.php'</script>";
                unset($_POST['submit']);
            }
            else{
                echo "<script>alert('check Given infromation')</script>";
            }


        }
    ?>