<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "blood_bank";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
//     echo "success";
// }
// else{
    die("Error". mysqli_connect_error());
}

?>

<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = $_POST["Uname"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $email = $_POST["email"];
    $existsU=false;
    $existsE=false;
	$checksql="SELECT `Name`, `Email` FROM `signup`";
	$result = mysqli_query($conn, $checksql);
	$row = mysqli_fetch_assoc($result);
	while($row = mysqli_fetch_assoc($result))
	{
		if($row['Name']==$username)
		{
			$existsU=true;
			break;
		}
		if( $row['Email']==$email)
		{
			$existsE=true;
			break;
		}
	}
	if($existsU)
	{
			echo '<script>alert("Warning !!! \nUsername is Alreday register\n Try another Username ")</script>';
	}
	if($existsE)
	{
			echo '<script>alert("Warning !!! \nEmail Id is Alreday register \n")</script>';
	}
    if(($password == $cpassword) && $existsU==false && $existsE==false){
        $sql = "INSERT INTO `signup` (`Name`, `Email`, `Password`, `Cnf_password`) VALUES ('$username', '$email', '$password', '$cpassword')";
        $result = mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
        }
    }
    else{
        $showError = "Passwords do not match";
    }
}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href='CSS/Register.css'>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="icon" href='Images/Img/Illustrated Blood Donor Hospital Logo.png' type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

</head>
<style>
</style>
<title>Sign-Up</title>
<body>
<?php
    if($showAlert){
		echo '<script>alert("Your account is now created and you can login")</script>';
    }
    if($showError){
		echo '<script>alert("Error !!!  Passwords do not match ")</script>';
    }
    ?>
    <div class="container">
    <nav class="flex">
        <a href="index.php"><img id="logoimg" src="Images/Img/Illustrated Blood Donor Hospital Logo.png" alt="logo"></a>
        <div class="logo"> Red Blood</div>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li>
            <a class="scroll" href="index.php#about-us">About Us</a>
          </li>
          <li>
            <a href="#">Blood Availability
              <i class="fas fa-caret-down"></i>
            </a>
            
          </li>
          <li>
            <a href="#"
            >Add your BloodBank
            <i class="fas fa-caret-down"></i>
          </a>
        </li>
        <li>
          <a href="#"
            >Want to Donate Blood
            <i class="fas fa-caret-down"></i>
            <ul>
              <li><a href="#">Blood Donation Camp</a></li>
              <li><a href="#">Donor Login</a></li>
              <li><a href="#">Register for VBD Camp</a></li>
              <!-- <li><a href="About_Blood_Donation.php">About Blood Donation</a></li> -->
            </ul>
          </a>
        </li>
        </ul>
    </nav>



<div class="inner" style="top:55%" >
    <div class="photo">
        <img src="Images/regphoto.png">
    </div>
    <div class="user-form">
        <h1>Register Your Account</h1>
        
        <form action="sign_up.php" method="post" >
            <i class="fas fa-user icon"></i>
            <input type="text" placeholder="User Name" name="Uname" >
            <br>
            <i class="fas fa-envelope-square"></i>
            <input type="email" placeholder="E-mail" name="email" >
            <br>
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" id="password_data" name="password" >
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Confirm Password" id="password_data" name="cpassword" >
            <div class="safety" style="font-family: sans-serif; font-size: 20px;">
            </div>
            <div class="action-btn">
              <button type="submit" class ="btn primary" >Create Account</button>
			</form>
			<a class ="btn primary" href="register.php">LogIN</a>
			<a class ="btn primary" href="index.php">Skip</a>
		</div>
			
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>