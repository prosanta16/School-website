<?php include('config1.php'); ?>
<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>

	<div class="header-w3l">
		<h1> Sign Up Form</h1>
	</div>

<div class="main-agileits">
	<h2 class="sub-head">Sign Up</h2>
		<div class="sub-main">	
			<form action="Registration.php" method="post">
			<input placeholder="Enter Name" name="name" class="name" type="text" required="">
			<input placeholder="Enter gender" name="gender" class="gender" type="text" required="">
			<input placeholder="Enter batch" name="batch" class="batch" type="text" required="">
			<input placeholder="Enter Email" name="email" class="email" type="text" required="">
			<input placeholder="Enter PhoneNumber" name="phone" class="number" type="text" required="">
			<input  placeholder="Enter Password" name="password" class="pass" type="password" required="">
			<div class="input-btn">
					<button type="submit" name="submit" class="btn">Submit</button>
			</div>
			</form>
		</div>
		<div class="clear"></div>
</div>
</body>
</html>