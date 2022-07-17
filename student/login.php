<?php
session_start();
    $Servername = "localhost";
    $Username = "root";
    $Password = "";
    $database="login";
    $conn = mysqli_connect($Servername , $Username, $Password, $database);


    /*if(!$conn)
    {
        echo "Unsuccessful";
    }

    else{
        echo "Successful";
    }*/

    if(isset ($_POST["submit"]))
    {
        //$Username = $_REQUEST['Username'];
        //$Password = $_REQUEST['Password'];
        /*echo $Username;
        echo $Password;*/
        $q = ("select * from loginform where Username='".$_POST['Username']."' and Password='".$_POST['Password']."'");     
        $query = mysqli_query($conn, $q);
        $count=mysqli_num_rows($query);
        $row = mysqli_fetch_assoc($query);
        $count=mysqli_num_rows($query);       
        if($count>0)
        {   
            $_SESSION['name']=$row['Name'];
            $_SESSION['email']=$row['Email'];
            $_SESSION['department']=$row['Department'];
            $_SESSION['enrollment']=$row['Username']; 
            header('location:dashboard.php');
        }
        else{
            echo "Invalid login";
        }
        
        /*while
        $rowcount = mysqli_num_rows($query);
        if($rowcount>0)
        {
            header('location:dashboard.html');
           // echo "Login Successful";
        }
        else{
            echo "Invalid Login";
        }*/
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
				<h1>Login</h1>
				<input id="Username" name="Username" placeholder="Username" />
				<input id="Password" name="Password" placeholder="Password" />
				<a href="forgotpassword.php">Forgot your password?</a>
                <button name="submit">submit</button>
				<a href="#">New User?</a><button><a href="signup.php">Sign Up</a></button>
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

