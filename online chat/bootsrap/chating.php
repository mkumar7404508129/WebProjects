<?php
    if(isset($_SESSION['Name']))
    {
        $page = $_SERVER['PHP_SELF'];
        $sec = "30";
        header("Refresh: $sec; url=$page");
        $query="SELECT * FROM chat";
        include "./dbcon.php";
			$run=$dbcon->query($query);
	?>
            

    
   
<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="chating.css">
  </head>
  <body>
	<div class="container">
		<div class="row mt-5">
			<div class="col-md-6 offset-md-3 col-sm-6 offset-sm-3 col-12 comments-main pt-4 rounded">
				
			<ul class="p-0">
					<li>
						<div class="row comments mb-2">
							<div class="col-md-2 col-sm-2 col-3 text-center user-img">
						    	<img id="profile-photo" src="http://nicesnippets.com/demo/man01.png" class="rounded-circle" />
							</div>
							<div class="col-md-9 col-sm-9 col-9 comment rounded mb-2">
							<?php while($data=$run->fetch_assoc())
            					{?>	
							<h4 class="m-0"><a href="#"><?php echo $data['Name'];?></a></h4>
							    
								<p class="mb-0 text-white"><?php echo $data['chats'];?></p>
								<?php } }?>
							</div>
						</div>
					</li>
			
				
			
				<div class="row comment-box-main p-3 rounded-bottom">
				<form action="../redirect/chatingre.php" method="post">	  
				<div class="col-md-9 col-sm-9 col-9 pr-0 comment-box">
					  <input type="text" class="form-control" placeholder="comment ...." />
			  		</div>
			  		<div class="col-md-3 col-sm-2 col-2 pl-0 text-center send-btn">
			  			<input type="submit"class="btn btn-info" name="submit"value="send">
			  		</div>
				</div>
				</form>
			</div>
		</div>
	</div>
  </body>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/0.12.14/vue.min.js'></script>
</html>
