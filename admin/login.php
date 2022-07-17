<?php
session_start();

if(isset($_POST['s1']))
{
    if($_POST['u1']=="admin" && $_POST['p1']==123)
    {
        $_SESSION['username']="admin";
        header("Location:dashboard.php");
    }
    else
    {
        echo "Invalid details";
    }
}

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Study Buddy</title>
</head>
<body>
	<div class="container" id="container">
		<div class="form-container log-in-container">
			<form action="#" method="post">
				<h1>Admin Login</h1>
				
				<input id="Username" name="u1" placeholder="Username" />
				<input id="Password" name="p1" placeholder="Password" />
				<button name="s1">submit</button>
				
				
			</form>

		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-right">
					<h1>Study Buddy</h1>
					<h2>Your Campus Partner</h2>

					<p>This project is made by Shobhit and Aum.</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
