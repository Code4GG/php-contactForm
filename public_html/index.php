			<?php 

                if ($_POST["submit"]){

                $result="<div class='alert alert-success'>Form Submitted</div>";	
					
					if (!$_POST["name"]){
	
						$error="<br />Please Enter Your Name";			
			
					}
				
					if (!$_POST["email"]){
	
						$error.="<br />Please Enter Your Email Address";			
			
					}

					if (!$_POST["comment"]){
	
						$error.="<br />Please Enter a Comment ";			
			
					}

					if ($_POST['email']!="" AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) { 
                        
						$error.="<br />Please enter a valid email address"; 

                    } 

					if($error){
								
						$result="<div class='alert alert-danger'><strong>Possible Errors In Your Form:</strong>".$error."</div>";

					} else {
	
							if (mail("imaxxyc@gmail.com", "Comment From Website", "Name: ".$_POST['name']."
					
							Email: ".$_POST['email']."

							Comment: ".$_POST['comment'])){
						
							$result="<div class='alert alert-success'><strong>Thank You!</strong>Ill be in touch.</div>";

							} else {
					
								$result="<div class='alert alert-success'><strong>Sorry there was an error sending your message please try again later</strong></div>";

							}		

						}
			
                	}

       		 ?>
<html>
<head>
	<title>Contact Form</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
	<style type="text/css">
		#container{
			width: 1200px;
			margin: 0 auto;
			font-family: helvetica;
			font-size: 1.2em;
			border: 3px solid lightgrey;
			border-radius: 5px;
			padding: 25px;
			margin-top: 30px;
			margin-bottom: 30px;
		}
		input{
			border-radius: 5px;
			padding: 7px;
			width: 100%;
			height: 30px;
			font-size: 1.2em;
			border: 1px solid grey;
			margin-bottom: 10px; 
		}
		label{
			width: 200px;
			padding-top: 10px;
			color: gray;
			font-weight: 100;
		}
		#submitButton{
			height: 50px;
			margin-top: 30px;
		}
		#validationForm > div{
			display: none;
			color: red;
			margin-left: 205px;
			margin-bottom: 25px;
		}
		.title{
			display: flex;
			justify-content: center;
			font-size: 35px;
			padding: 40px;
		}
		.btn-success{
			background-color: royalblue;
		}

	</style>
<body>
		

		<div id="container">

			<div class="title">PHP Contact Form</div>
				<?php echo $result; ?>
			<p class="lead">Please get in touch - I'll get back to you as soon as I can</p>
		
		<form method="post" id="validationForm">

			<label for="name">Your Name:</label>
			<input type="text" name="name" value="<?php echo $_POST['name']; ?>">
			

			<label for="email">Your Email:</label>
			<input type="email" name="email" value="<?php echo $_POST['email']; ?>">
			

			<label for="comment">Your Comment:</label>
			<textarea class="form-control" name="comment"><?php echo $_POST['name']; ?></textarea>
			


			<input id="submitButton" name="submit" class="btn btn-success" type="submit" value="Submit">


		</form>
			
		</div>
		

	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>