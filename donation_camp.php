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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href='Images/Img/Illustrated Blood Donor Hospital Logo.png' type="image/png">
    <title>Donation Camps</title>
    <!-- <link rel="stylesheet" href="/combined.css"> -->
    <link rel="stylesheet" href="CSS/hover.min.css">
    <link rel="stylesheet" href="CSS/bootstrap.css">
	<link rel="stylesheet" href="CSS/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="stylesheet" href="CSS/style.css">
	<!-- <link rel="stylesheet" href="avl.css"> -->
	<style>
		.container{
    width: 100%;
    height: 100vh;
    background-image: url(Images/Icon_BG/blood\ \(3\).jpg);
    background-repeat: no-repeat;
    background-size: 100% 100%;
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
          <a class="scroll" href="#about-us">About Us</a>
        </li>
        <li>
          <a href="blood _bank.ava.php">Blood Availability
            <i class="fas fa-caret-down"></i>
          </a>
          
        </li>
        <li>
          <a href="bloodbank_register.php"
          >Add your BloodBank
          <i class="fas fa-caret-down"></i>
        </a>
      </li>
      <li>
        <a href="#"
          >Want to Donate Blood
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
          <h3 class="text-danger">Camp Schedule</h3>
        </div>
        <div class="panel panel-danger">
          <div class="panel-heading">Camp Schedules</div>
          <div class="panel-body">
            
        
        <div class="row">
        <div>
        
      
        <div id="advanceSearchMenu" style="" class="row">
        
        
        <div class="col-md-2">
        <!--  <label for="salutation">State: </label> -->
        <select id="donorAddStateCode" class="form-control" onchange="loadDistrictList(this.value)"><option value="-99">Select State</option><option value="35">Andaman &amp; Nicobar Islands</option><option value="28">Andhra Pradesh</option><option value="12">Arunachal Pradesh</option><option value="18">Assam</option><option value="10">Bihar</option><option value="94">Chandigarh</option><option value="22">Chhattisgarh</option><option value="26">Dadra &amp; Nagar Haveli</option><option value="25">Daman &amp; Diu</option><option value="97">Delhi</option><option value="30">Goa</option><option value="24">Gujarat</option><option value="96">Haryana</option><option value="92">Himachal Pradesh</option><option value="91">Jammu and Kashmir</option><option value="20">Jharkhand</option><option value="29">Karnataka</option><option value="32">Kerala</option><option value="37">Ladakh</option><option value="31">Lakshadweep</option><option value="23">Madhya Pradesh</option><option value="27">Maharashtra</option><option value="14">Manipur</option><option value="17">Meghalaya</option><option value="15">Mizoram</option><option value="13">Nagaland</option><option value="21">Odisha</option><option value="34">Puducherry</option><option value="93">Punjab</option><option value="98">Rajasthan</option><option value="11">Sikkim</option><option value="33">Tamil Nadu</option><option value="36">Telangana</option><option value="16">Tripura</option><option value="95">Uttarakhand</option><option value="99">Uttar Pradesh</option><option value="19">West Bengal</option></select>
        <div align="center">
        
        <!-- shalini 16-09-2022 -->
                                                <div id="enterstate" style="display:none;">
                                                    <h4 class="text-danger">Please enter state</h4>
                                                </div>
                                            </div>
                                            
                                            <!-- shalini ends -->
        
        </div>			 
        
        <div class="col-sm-3">
          <input type="text" name="hospCity" maxlength="40" tabindex="1" value=""
          onkeypress="return validateAlphaOnly(event,this)" class="form-control"
          fdprocessedid="ine1y">

      </div>
        <div class="col-md-3">
        <!-- <input type="text" class="form-control" id="txtBbname" placeholder="Blood Bank or Hospital Name"> -->
        <div class="col-sm-3">
          <input type="date" name="hospCity" maxlength="40" tabindex="1" value=""
          onkeypress="return validateAlphaOnly(event,this)" class="form-control"
          fdprocessedid="ine1y"  style="
          width: 271%;
          height: 35px;">

      </div>
        
        </div>
       
        
        <div class="col-md-2">
        <button type="button" class="btn btn-danger" onclick="getBloodBankList()">Search</button>
        </div>
        
        <!-- <a id='frame' href='https://calendar.google.com/calendar/embed?src=dhe4otegup82v2pvo09ulrhpsk%40group.calendar.google.com&ctz=Asia/Calcutta' class='fancybox.iframe'><i class='fa fa-calendar'></i></a> -->
        <br>
        <br>
        
        </div>
        
        </div>
        </div>
        
         <div id="emptyBox" style="display: none;">
        
        </div>
        
        
        