<?php include('Contact_page\Contact_connect.php'); ?>

<!DOCTYPE html>
<html>
	<head>
	    <meta charset="utf-8"/>
		<title>Contact</title>
		<script language="javascript" type="text/javascript">
			function clearText(field)
			{
				if (field.defaultValue == field.value) field.value = '';
				else if (field.value == '') field.value = field.defaultValue;
			}
		</script>

		<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/style.css">
		
	</head>
	
	<body>
		<div class="Headersection Templete clear">
			<h2> Pithabhogh D.G.C High School</h2>
		</div>
			<div class="Navigation Templete clear">
				<ul>
					<li><a href="School website.php">Home</a></li>
					<li><a href="About.php">About</a></li>
					<li><a id="active" href="Contact.php">Contact</a></li>
					<li>Teacher
						  <ul>
							  <li><a href="">Krishno Roy<a></li>
							  <li><a href="">Amol sikder<a></li>
							  <li><a href="">Poritosh Biswas<a></li>
						  </ul>
					  
					</li>
					
					<li>Batch
						  <ul>
							  <li><a href="">Batch-1997<a></li>
							  <li><a href="">Batch-1998<a></li>
							  <li><a href="">Batch-1999<a></li>
						  </ul>
					</li>
					<li><a href="#">Result</a></li>
					<li><a href="#">Syllabus</a></li>
					<li><a href="#">Learning</a></li>
					
				 </ul>	
			  
			   </div>
			
		</div>
			<div class="Contentsection  Templete clear">
				<div class="Maincontent Templete clear">
					<div class="samepost clear">
						<div class="About">
							 <h2>Contact </h2>
							 <form  action= "config.php" method="POST">
							 <table>
							 <tr>
							 <td>Your First Name : </td>
							 <td><input type="text" required name="fName" placeholder="Enter First Name"/></td>
							 </tr>
							 <tr>
							 <td>Your Last Name : </td>
							 <td><input type="text" required name="lName" placeholder="Enter Last Name"/></td>
							 </tr>
							 <tr>
							 <td>Your Email Address : </td>
							 <td><input type="email" required name="email" placeholder="Enter Email Address"/></td>
							 </tr>
							 <tr>
							 <td>Your Phone Number : </td>
							 <td><input type="varchar" required name="phone" placeholder="Enter Phone Number"/></td>
							 </tr>
							 <tr>
							 <td>Your Address : </td>
							 <td>
							 <textarea  required name="message" ></textarea>
							 </td>
							 </tr>
							 <tr>
							 <td> </td>
							 <td><input type="submit" name="submit" value="Submit"</td>
							 </tr>
							 </table>
							 </form>
					
						</div>
					</div>
				</div>
			</div>
				
				
			<div class = "footer Templete clear">
				<div class = "social">
				<a href="http://www.facebook.com"><img src="Images/facebook.png" alt="Facebook"/></a>
				<a href="http://www.twitter.com"><img src="Images/twitter.png" alt="Twitter"/></a>
				<a href="http://www.google.com"><img src="Images/google.png" alt="Google"/></a>
				</div>
			
			 <p>&copy; All Rights Reserved</p>
		   </div>
		
	</body>
</html>

