<form class='form'action="#share" method="post">
			<fieldset>
				<label for="fname" >First Name</label>
				<input type="text" minlength="3" id="lname" name='fname' placeholder="Last Name" required>
				<label for="lname">Last Name</label>
				<input type="text" minlength="3" id="lname" name='lname' placeholder="Last Name" required>
				<label for="mobile">Mobile No</label>
				<input type="tel"  pattern="[0-9]{10}" maxlength="10"id="mobile" name='mobile' placeholder="ex:9898998198" required>
				<label for="email">Email:</label>
				<input type="email" id="email" name='email' placeholder="ex:abc@gmail.com" required>
				<input type="submit" value="Submit" name="submit">
			</fieldset>
	</form>
<?php

	if(isset($_POST['submit']))
	{
		if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
				$url = "https://"; 
		else
				$url = "http://";

		$rand=rand(100,10000);

		// Append the host(domain name, ip) to the URL. 
		$url.= $_SERVER['HTTP_HOST'];
		// Append the requested resource location to the URL 
		$url.= $_SERVER['PHP_SELF'];  	
		$mobile=$_POST['mobile'];
		$refrance=$rand+$mobile;
		$url.="?ref="."$refrance"."#form";
			include "./mail/mail.php";
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		
		$email=$_POST['email'];
		unset($_POST['submit']);
	
	}	
?>
