
<form method='post'>
    <fieldset>
        <legend>Sign In Here</legend>
        <label for="name">Name:</label>
            <input onchange="login()" id="name" name='name' type="text" placeholder="ex:Nripender" required>
        <label for="card">Card No:</label>
            <input id='card' min="0"type="Number" placeholder="Card No" name='card_no' required>
            <input id='submit' type="submit" name='submit'value='Login'>
    </fieldset>
 </form>
 <? 
    start_session();
    if(isset($_POST['submit']))
    {
       $name= $_POST['name'];
       $card= $_POST['card_no'];
       
       $query="SELECT * FROM login WHERE name='$name' and card_no='$card'";

       $run=$dbcon->query($query);
       
       if($run->num_rows >=1)
       {
           $_SESSION['card']=$card;
            echo "<script>window.open('./student/s_home.php','self')</script>";
       }
       else 
       {
           echo "<script>alert('try agian')</script>";
       }
     
    }
 ?>