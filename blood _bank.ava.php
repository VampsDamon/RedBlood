<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
else{
	$loggedin = false;
  }

?>


<?php
// Connect to the Database 
$servername = "localhost";
$username = "root";
$password = "";
$database = "blood_bank";
$state=false ;
	$district =false;
		$bgroup =false;
// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn) {
	die("Sorry we failed to connect: " . mysqli_connect_error());
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href='Images/Img/Illustrated Blood Donor Hospital Logo.png' type="image/png">

	<title>Blood Availability</title>
	<!-- <link rel="stylesheet" href="/combined.css"> -->
	<link rel="stylesheet" href="CSS/hover.min.css">
	<link rel="stylesheet" href="CSS/bootstrap.css">
	<link rel="stylesheet" href="CSS/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
	<!-- <link rel="stylesheet" href="../style.css"> -->
	<!-- <link rel="stylesheet" href="avl.css"> -->
	<style>
		.container {
			width: 100%;
			height: 100vh;
			/* background-image: url(Images/Icon_BG/blood\ \(3\).jpg); */
			background-repeat: no-repeat;
			background-size: 100% 100%;
		}

		body {
			background-image: url(Images/Icon_BG/blood\ \(3\).jpg);
			width: 100%;
			height: 100%;
			background-repeat: no-repeat;
			background-size: 100% 100%;
			background-color: #DFC6C9;
		}

		nav {
			width: 106%;
		}

		form {
			display: flex;
			justify-content: space-around;


		}

		.inp {
			width: 250px;
			font-size: large;
		}

		.output {
			margin-top: 30px;
			background-color: white;
			font-size: 15px;

		}
	</style>
</head>

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
					<a href="blood _bank.ava.php">Blood Availability
						<i class="fas fa-caret-down"></i>
					</a>

				</li>
				<li>
					<a href="bloodbank_register.php">Add your BloodBank
						<i class="fas fa-caret-down"></i>
					</a>
				</li>
				<li>
					<a href="#">Want to Donate Blood
						<i class="fas fa-caret-down"></i>
						<ul>
							<li><a href="donation_camp.php">Blood Donation Camp</a></li>
							<li><a href="Register.php">Donor Login</a></li>
							<li><a href="camp_registration.php">Register for VBD Camp</a></li>
							<!-- <li><a href="About_Blood_Donation.php">About Blood Donation</a></li> -->
						</ul>
					</a>
				</li>
			</ul>
		</nav>
		<div class="container1 wrapper">
			<div class="page-header">
				<h3 class="text-danger">Blood Stock Availability</h3>
			</div>


			<div class="panel panel-danger">
				<div class="panel-heading">Search Blood Stock</div>
			</div>
		</div>
		<div class="serchbox">

			<form action="./blood _bank.ava.php" method="POST">
				<div class="mb-3 inp">

					<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter State" name="state">
				</div>
				<div class="mb-3 inp">

					<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter District" name="district" >
				</div>
				<div class="mb-3 inp">
					<select class="form-select" aria-label="Select Blood Group" name="bgroup" >
						<option selected>Select Blood Group</option>
						<option value="B+">B+</option>
						<option value="A+">A+</option>
						<option value="AB+">AB+</option>
						<option value="B-">B-</option>
						<option value="O+">O+</option>
					</select>
				</div>

				<button type="submit" class="btn btn-primary">Submit</button>
			</form>

			
		</div>
		<div class="output">
			<table class="table" id="myTable">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">State</th>
						<th scope="col">District</th>
						<th scope="col">Blood Group</th>
						<th scope="col">Email</th>
						<th scope="col">Phone</th>
						<th scope="col">Hospital Name</th>
						<th scope="col">Blood Bank Name</th>
						
					</tr>
				</thead>
				<tbody>
				<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Update the record
	$state = $_POST["state"];
	$district = $_POST["district"];
	$bgroup = $_POST["bgroup"];
}
          $sql = "SELECT * FROM `bloodbank_reg` WHERE `State` LIKE '$state' AND `District` LIKE '$district' AND `Blood_Group` LIKE '$bgroup' ";
          $result = mysqli_query($conn, $sql);
          $sno = 0;
          while($row = mysqli_fetch_assoc($result)){
            $sno = $sno + 1;
            echo "<tr>
            <th scope='row'>". $sno . "</th>
            <td>". $row['State'] . "</td>
            <td>". $row['District'] . "</td>
            <td>". $row['Blood_Group'] . "</td>
            <td>". $row['Email'] . "</td>
            <td>". $row['Phone'] . "</td>
            <td>". $row['Hname'] . "</td>
            <td>". $row['BBname'] . "</td>
          </tr>";
        } 
          ?>
				</tbody>
			</table>
		</div>

	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script>
    $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
  </script>
  

</body>

</html>