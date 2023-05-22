<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "blood_bank";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
  //     echo "success";
  // }
  // else{
  die("Error" . mysqli_connect_error());
}

?>

<?php
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $username = $_POST["Uname"];
  $password = $_POST["password"];
  $email = $_POST["email"];
  $checksql = "SELECT * FROM `signup` where Name='$username' AND Password='$password' AND Email='$email'";
  $result = mysqli_query($conn, $checksql);
  $num = mysqli_num_rows($result);
  if ($num == 1) {
    $login = true;
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    header("location: welcome.php");
    while ($row = mysqli_fetch_assoc($result)) {
      if (password_verify($password, $row['Password'])) {
      } else {
        $showError = "Invalid Credentials";
      }
    }
  } else {
    $showError = "Invalid Credentials";
  }
}

if ($login) {
  echo '<script>alert("You are logged in ")</script>';
}
if ($showError) {
  echo '<script>alert("Invalid Credentials ")</script>';
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>
<style>
  #or {
    margin: -30px 0px;
    text-align: center;
  }
</style>
<title>Log-In</title>

<body>
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
          <a href="#">Add your BloodBank
            <i class="fas fa-caret-down"></i>
          </a>
        </li>
        <li>
          <a href="#">Want to Donate Blood
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




    <div class="inner" style="top:55%">
      <div class="photo">
        <img src="Images/regphoto.png">
      </div>
      <div class="user-form">
        <h1>Sign In With Your Account</h1>
        <form action="register.php" method="post">
          <i class="fas fa-user icon"></i>
          <input type="text" placeholder="User Name" name="Uname" required>
          <br>
          <!-- <h1 id="or">OR</h1> -->
          <i class="fas fa-envelope-square"></i>
          <input type="email" placeholder="E-mail" name="email" required>
          <br>
          <i class="fas fa-lock"></i>
          <input type="password" placeholder="Password" id="password_data" name="password" required>
          <div class="safety" style="font-family: sans-serif; font-size: 20px;">
          </div>
          <div class="action-btn">
            <button type="submit" class="btn primary">Log In</button>

        </form>
        <a class="btn primary" href="sign_up.php">Crete Account</a>
        <a class="btn primary" href="index.php">Skip</a>
      </div>
    </div>
  </div>
</body>

</html>