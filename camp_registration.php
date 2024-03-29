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
	<title>Camp Registration</title>
	<!-- <link rel="stylesheet" href="/combined.css"> -->
	<link rel="stylesheet" href="CSS/hover.min.css">
	<link rel="stylesheet" href="CSS/bootstrap.css">
	<link rel="stylesheet" href="CSS/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<!-- <link rel="stylesheet" href="../style.css">
	<link rel="stylesheet" href="avl.css"> -->
	<style>
		.container {
			width: 100%;
			height: 100vh;
			/* background-image: url(../Test/blood\ \(3\).jpg); */
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
				<li><a href="index.php#about-us">About US</a></li>

			</ul>
		</nav>
		<!--  menu  -->

		<form name="PortalOnlineCampRequestFB" method="POST" action="/BLDAHIMS/bloodbank/onlineCampRequestNewBB.cnt" onsubmit="return false">



			<div class="container-fluid">



				<!--New  -->

				<!-- 	<div class="col-12 col-sm-9 col-md-9 col-lg-9 "> -->
				<div class="col-sm-12 ">
					<div class="container">
						<div class="row">



						</div>
						<div class="container" id="mainContainer" style="margin-top:10px">
							<div class="card">
								<!-- <div class="card-header">
		<h4 class="text text-large text-danger">Camp Registration</h4> 
		</div> -->
								<div class="card-header" style="background-color:#BF222B;color:white" align="center">
									<div class="div divtable accordion " style="background-color:#BF222B;color:white">
										<div class="tr" align="center">

											<b><i class="fas fa-hand-holding-water" aria-hidden="true"></i>Camp Registration</b>

										</div>
									</div>
								</div>

								<div class="card-body">
									<div class="row">
										<div class="col-sm-1"></div>
										<div class="col-sm-4">
											<label for="txtemailId">Organization Type: </label>
											<font color="red">*</font>
											<select name="organizationType" onchange="setTypName()" class="form-control">
												<option selected="" value="0">Select value </option>
												<option value="2">Sewa hi Sangathan- Health Volunteers </option>
												<option value="1">Terapanth Yuvak Parishad</option>
												<option value="3">Red Cross</option>
												<option value="4">RWA</option>
												<option value="5">others</option>
											</select>


											<div align="center">
												<div id="organizationType" style="display:none;">
													<h4 class="text-danger">Please enter organization type</h4>
												</div>
											</div>
										</div>
										<div class="col-sm-1"></div>
										<div class="col-sm-4">
											<label for="txtemailId">Organization Name: </label>
											<font color="red">*</font>
											<!-- shalini -->
											<div id="other" style="display:block;">
												<input type="text" name="organizationName" maxlength="100" value="" onkeypress="return  validateAlphaOnlyWithDotAndSpace(event,this)" class="form-control" id="txtemailId">
												<div align="center">
													<div id="enterorgnizationname" style="display:none;">
														<h4 class="text-danger">Please enter organization name</h4>
													</div>
												</div>

											</div>

											<div id="enterorganizername" style="display:none;">
												<select name="typName" class="form-control">
													<option selected="" value="1">Select TYP Name</option>
													<option value="Rajahmundry">Rajahmundry</option>
													<option value="Vijaywada">Vijaywada</option>
													<option value="Visakhapatnam">Visakhapatnam</option>
													<option value="Vizianagaram">Vizianagaram</option>
													<option value="Barpeta Road">Barpeta Road</option>
													<option value="Bilasipara">Bilasipara</option>
													<option value="Bongaigaon">Bongaigaon</option>
													<option value="Bongaigaon South">Bongaigaon South</option>
													<option value="Dhubri">Dhubri</option>
													<option value="Gauripur">Gauripur</option>
													<option value="Goalpara">Goalpara</option>
													<option value="Guwahati">Guwahati</option>
													<option value="Jorhat">Jorhat</option>
													<option value="Karimganj">Karimganj</option>
													<option value="Kharupethia">Kharupethia</option>
													<option value="Kokrajhar">Kokrajhar</option>
													<option value="Krishnai">Krishnai</option>
													<option value="Mankachar">Mankachar</option>
													<option value="Nagaon">Nagaon</option>
													<option value="Silchar">Silchar</option>
													<option value="Tezpur">Tezpur</option>
													<option value="Araria">Araria</option>
													<option value="Bhagalpur">Bhagalpur</option>
													<option value="Bhatta Bazar">Bhatta Bazar</option>
													<option value="Forbesganj">Forbesganj</option>
													<option value="Gulabbagh">Gulabbagh</option>
													<option value="Katihar">Katihar</option>
													<option value="Khushkibagh">Khushkibagh</option>
													<option value="Kishanganj">Kishanganj</option>
													<option value="Nirmali">Nirmali</option>
													<option value="Patna City">Patna City</option>
													<option value="Supaul">Supaul</option>
													<option value="Ambikapur">Ambikapur</option>
													<option value="Durg Bhilai">Durg Bhilai</option>
													<option value="Jagdalpur">Jagdalpur</option>
													<option value="Manendragarh">Manendragarh</option>
													<option value="Raipur">Raipur</option>
													<option value="Rajnandgaon">Rajnandgaon</option>
													<option value="Delhi">Delhi</option>
													<option value="Ahmedabad">Ahmedabad</option>
													<option value="Amraiwadi Odhav">Amraiwadi Odhav</option>
													<option value="Bardoli">Bardoli</option>
													<option value="Bhuj-Kutch">Bhuj-Kutch</option>
													<option value="Chalthan">Chalthan</option>
													<option value="Chikhli">Chikhli</option>
													<option value="Deesa">Deesa</option>
													<option value="Dungri">Dungri</option>
													<option value="Gandhidham">Gandhidham</option>
													<option value="Kamrej">Kamrej</option>
													<option value="Kheda">Kheda</option>
													<option value="Kim">Kim</option>
													<option value="Limbayat">Limbayat</option>
													<option value="Navsari">Navsari</option>
													<option value="Parvat Patiya">Parvat Patiya</option>
													<option value="Sachin">Sachin</option>
													<option value="Surat">Surat</option>
													<option value="Udhna">Udhna</option>
													<option value="Vadodara">Vadodara</option>
													<option value="Valsad">Valsad</option>
													<option value="Vapi">Vapi</option>
													<option value="Vyara">Vyara</option>
													<option value="Barwala">Barwala</option>
													<option value="Bhiwani">Bhiwani</option>
													<option value="Bhuna">Bhuna</option>
													<option value="Chikamandi">Chikamandi</option>
													<option value="Faridabad">Faridabad</option>
													<option value="Fatehabad">Fatehabad</option>
													<option value="Gurugram">Gurugram</option>
													<option value="Hansi">Hansi</option>
													<option value="Hisar">Hisar</option>
													<option value="Jakhal Mandi">Jakhal Mandi</option>
													<option value="Jind">Jind</option>
													<option value="Kaithal">Kaithal</option>
													<option value="Kalanwali">Kalanwali</option>
													<option value="Mandi Adampur">Mandi Adampur</option>
													<option value="Narwana">Narwana</option>
													<option value="Panchkula">Panchkula</option>
													<option value="Rohtak">Rohtak</option>
													<option value="Sirsa">Sirsa</option>
													<option value="Tohana">Tohana</option>
													<option value="Tosham">Tosham</option>
													<option value="Uchana Mandi">Uchana Mandi</option>
													<option value="Uklana Mandi">Uklana Mandi</option>
													<option value="Chas Bokaro">Chas Bokaro</option>
													<option value="Ranchi">Ranchi</option>
													<option value="Bellary">Bellary</option>
													<option value="Chikmanglur">Chikmanglur</option>
													<option value="Chitradurga">Chitradurga</option>
													<option value="Davangere">Davangere</option>
													<option value="Gadag">Gadag</option>
													<option value="Gandhinagar-Bangalore">Gandhinagar-Bangalore</option>
													<option value="Gangavati">Gangavati</option>
													<option value="HBST Hanumanthnagar">HBST Hanumanthnagar</option>
													<option value="Hassan">Hassan</option>
													<option value="Hiriyur">Hiriyur</option>
													<option value="Hospete">Hospete</option>
													<option value="Hubli">Hubli</option>
													<option value="Hunsur">Hunsur</option>
													<option value="K. G. F.">K. G. F.</option>
													<option value="Koppal">Koppal</option>
													<option value="Mandya">Mandya</option>
													<option value="Mysore">Mysore</option>
													<option value="Nanjangud">Nanjangud</option>
													<option value="Raichur">Raichur</option>
													<option value="Rajajinagar">Rajajinagar</option>
													<option value="Rajarajeshwari Nagar">Rajarajeshwari Nagar</option>
													<option value="Shimoga">Shimoga</option>
													<option value="Sindhanur">Sindhanur</option>
													<option value="T. Dasarhalli">T. Dasarhalli</option>
													<option value="Vijayanagar">Vijayanagar</option>
													<option value="Yashwantpur">Yashwantpur</option>
													<option value="Kochi">Kochi</option>
													<option value="Bori">Bori</option>
													<option value="Burhanpur">Burhanpur</option>
													<option value="Indore">Indore</option>
													<option value="Jabalpur">Jabalpur</option>
													<option value="Jawad">Jawad</option>
													<option value="Jhabua">Jhabua</option>
													<option value="Jhaknawad">Jhaknawad</option>
													<option value="Karwad">Karwad</option>
													<option value="Kesur">Kesur</option>
													<option value="Neemuch">Neemuch</option>
													<option value="Nepanagar">Nepanagar</option>
													<option value="Petlawad">Petlawad</option>
													<option value="Ratlam">Ratlam</option>
													<option value="Sarangi">Sarangi</option>
													<option value="Ujjain">Ujjain</option>
													<option value="Airoli-Mumbai">Airoli-Mumbai</option>
													<option value="Amalner">Amalner</option>
													<option value="Andheri-Mumbai">Andheri-Mumbai</option>
													<option value="Aurangabad">Aurangabad</option>
													<option value="Bandra-Mumbai">Bandra-Mumbai</option>
													<option value="Beed">Beed</option>
													<option value="Bhandup-Mumbai">Bhandup-Mumbai</option>
													<option value="Bhayandar-Mumbai">Bhayandar-Mumbai</option>
													<option value="Bhiwandi-Mumbai">Bhiwandi-Mumbai</option>
													<option value="Bhusawal">Bhusawal</option>
													<option value="Boisar-Mumbai">Boisar-Mumbai</option>
													<option value="Borivali-Mumbai">Borivali-Mumbai</option>
													<option value="CBD Belapur-Mumbai">CBD Belapur-Mumbai</option>
													<option value="Chalisgaon">Chalisgaon</option>
													<option value="Chembur-Mumbai">Chembur-Mumbai</option>
													<option value="Dadar-Mumbai">Dadar-Mumbai</option>
													<option value="Dahisar-Mumbai">Dahisar-Mumbai</option>
													<option value="Dakshin Mumbai">Dakshin Mumbai</option>
													<option value="Dhule">Dhule</option>
													<option value="Dombivali-Mumbai">Dombivali-Mumbai</option>
													<option value="Dondaicha">Dondaicha</option>
													<option value="Ghansoli-Mumbai">Ghansoli-Mumbai</option>
													<option value="Ghatkopar-Mumbai">Ghatkopar-Mumbai</option>
													<option value="Goregaon-Mumbai">Goregaon-Mumbai</option>
													<option value="Govandi-Mumbai">Govandi-Mumbai</option>
													<option value="Ichalkaranji">Ichalkaranji</option>
													<option value="Jalgaon">Jalgaon</option>
													<option value="Jalna">Jalna</option>
													<option value="Jaysingpur">Jaysingpur</option>
													<option value="Jogeshwari-Mumbai">Jogeshwari-Mumbai</option>
													<option value="Juna Kurla-Mumbai">Juna Kurla-Mumbai</option>
													<option value="Kajupada-Mumbai">Kajupada-Mumbai</option>
													<option value="Kandivali-Mumbai">Kandivali-Mumbai</option>
													<option value="Kanjurmarg-Mumbai">Kanjurmarg-Mumbai</option>
													<option value="Kharghar-Mumbai">Kharghar-Mumbai</option>
													<option value="Khar-Mumbai">Khar-Mumbai</option>
													<option value="Koparkhairane-Mumbai">Koparkhairane-Mumbai</option>
													<option value="Kopri Thane-Mumbai">Kopri Thane-Mumbai</option>
													<option value="Kurla-Mumbai">Kurla-Mumbai</option>
													<option value="Latur">Latur</option>
													<option value="Lokmanya Nagar Thane-Mumbai">Lokmanya Nagar Thane-Mumbai</option>
													<option value="Lonar">Lonar</option>
													<option value="Malad-Mumbai">Malad-Mumbai</option>
													<option value="Malegaon">Malegaon</option>
													<option value="Manmad">Manmad</option>
													<option value="Mira Road-Mumbai">Mira Road-Mumbai</option>
													<option value="Mulund-Mumbai">Mulund-Mumbai</option>
													<option value="Mumbra-Mumbai">Mumbra-Mumbai</option>
													<option value="Nagpur">Nagpur</option>
													<option value="Nalasopara-Mumbai">Nalasopara-Mumbai</option>
													<option value="Nehru Nagar-Mumbai">Nehru Nagar-Mumbai</option>
													<option value="Nerul-Mumbai">Nerul-Mumbai</option>
													<option value="Palghar-Mumbai">Palghar-Mumbai</option>
													<option value="Panvel-Mumbai">Panvel-Mumbai</option>
													<option value="Pimpalner">Pimpalner</option>
													<option value="Pimpri Chinchwad">Pimpri Chinchwad</option>
													<option value="Pune">Pune</option>
													<option value="Ratnagiri">Ratnagiri</option>
													<option value="Sakri">Sakri</option>
													<option value="Santacruz-Mumbai">Santacruz-Mumbai</option>
													<option value="Shahada">Shahada</option>
													<option value="Shirpur">Shirpur</option>
													<option value="Sion Koliwada-Mumbai">Sion Koliwada-Mumbai</option>
													<option value="Solapur">Solapur</option>
													<option value="Thane-Mumbai">Thane-Mumbai</option>
													<option value="Turbhe-Mumbai">Turbhe-Mumbai</option>
													<option value="Uran">Uran</option>
													<option value="Vasai Road-Mumbai">Vasai Road-Mumbai</option>
													<option value="Vashi-Mumbai">Vashi-Mumbai</option>
													<option value="Vikroli BumBkhana-Mumbai">Vikroli BumBkhana-Mumbai</option>
													<option value="Vikroli -Mumbai">Vikroli -Mumbai</option>
													<option value="Vile Parle-Mumbai">Vile Parle-Mumbai</option>
													<option value="Virar-Mumbai">Virar-Mumbai</option>
													<option value="Wagle Estate Thane-Mumbai">Wagle Estate Thane-Mumbai</option>
													<option value="Wani">Wani</option>
													<option value="Shillong">Shillong</option>
													<option value="Biratnagar">Biratnagar</option>
													<option value="Birgunj">Birgunj</option>
													<option value="Dharan">Dharan</option>
													<option value="Dhulabari">Dhulabari</option>
													<option value="Kathmandu">Kathmandu</option>
													<option value="Rajbiraj">Rajbiraj</option>
													<option value="Balangir">Balangir</option>
													<option value="Bangomunda">Bangomunda</option>
													<option value="Belpara">Belpara</option>
													<option value="Bhawanipatna">Bhawanipatna</option>
													<option value="Bhubneswar">Bhubneswar</option>
													<option value="Borda">Borda</option>
													<option value="Cuttack">Cuttack</option>
													<option value="Kantabanji">Kantabanji</option>
													<option value="Kesinga">Kesinga</option>
													<option value="Kursud">Kursud</option>
													<option value="Nabrangpur">Nabrangpur</option>
													<option value="Patnagarh Rampur">Patnagarh Rampur</option>
													<option value="Rourkela">Rourkela</option>
													<option value="Sindhekela">Sindhekela</option>
													<option value="Titilagarh">Titilagarh</option>
													<option value="Tusra">Tusra</option>
													<option value="Utkela">Utkela</option>
													<option value="Ahmedgarh">Ahmedgarh</option>
													<option value="Bareta Mandi">Bareta Mandi</option>
													<option value="Bhikhi">Bhikhi</option>
													<option value="Dhuri">Dhuri</option>
													<option value="Jagraon">Jagraon</option>
													<option value="Ludhiana">Ludhiana</option>
													<option value="Mandi Gobindgarh">Mandi Gobindgarh</option>
													<option value="Mansa">Mansa</option>
													<option value="Nabha">Nabha</option>
													<option value="Raman Mandi">Raman Mandi</option>
													<option value="Samana Mandi">Samana Mandi</option>
													<option value="Sangrur">Sangrur</option>
													<option value="Sherpur">Sherpur</option>
													<option value="Sunam">Sunam</option>
													<option value="Ajmer">Ajmer</option>
													<option value="Akola">Akola</option>
													<option value="Amet">Amet</option>
													<option value="Asada">Asada</option>
													<option value="Asind">Asind</option>
													<option value="Asotra">Asotra</option>
													<option value="Balotra">Balotra</option>
													<option value="Barmer">Barmer</option>
													<option value="Baytu">Baytu</option>
													<option value="Beawar">Beawar</option>
													<option value="Bhadra">Bhadra</option>
													<option value="Bhilwara">Bhilwara</option>
													<option value="Bhim">Bhim</option>
													<option value="Bhinasar">Bhinasar</option>
													<option value="Bidasar">Bidasar</option>
													<option value="Bikaner">Bikaner</option>
													<option value="Borawar">Borawar</option>
													<option value="Charwas">Charwas</option>
													<option value="Chhapar">Chhapar</option>
													<option value="Chhoti Khatu">Chhoti Khatu</option>
													<option value="Chittorgarh">Chittorgarh</option>
													<option value="Churu">Churu</option>
													<option value="Daulatgarh">Daulatgarh</option>
													<option value="Deogarh Madaria">Deogarh Madaria</option>
													<option value="Deshnok">Deshnok</option>
													<option value="Didwana">Didwana</option>
													<option value="Gangapur">Gangapur</option>
													<option value="Gangashahar">Gangashahar</option>
													<option value="Gogunda">Gogunda</option>
													<option value="Goluwala">Goluwala</option>
													<option value="Hanumangarh Town">Hanumangarh Town</option>
													<option value="Jaipur">Jaipur</option>
													<option value="Jasol">Jasol</option>
													<option value="Jodhpur">Jodhpur</option>
													<option value="Jorawarpura">Jorawarpura</option>
													<option value="Kalu">Kalu</option>
													<option value="Kankroli">Kankroli</option>
													<option value="Kanod">Kanod</option>
													<option value="Kelwa">Kelwa</option>
													<option value="Kota">Kota</option>
													<option value="Lachhura">Lachhura</option>
													<option value="Ladnun">Ladnun</option>
													<option value="Lilanwali">Lilanwali</option>
													<option value="Lunkaransar">Lunkaransar</option>
													<option value="Madanganj Kishangarh">Madanganj Kishangarh</option>
													<option value="Momasar">Momasar</option>
													<option value="Nal-Bikaner">Nal-Bikaner</option>
													<option value="Nathdwara">Nathdwara</option>
													<option value="Nohar">Nohar</option>
													<option value="Nokha">Nokha</option>
													<option value="Pachpadra">Pachpadra</option>
													<option value="Pali">Pali</option>
													<option value="Pilibanga">Pilibanga</option>
													<option value="Pur">Pur</option>
													<option value="Railmagra">Railmagra</option>
													<option value="Raisinghnagar">Raisinghnagar</option>
													<option value="Rajaji Ka Kareda">Rajaji Ka Kareda</option>
													<option value="Rajaldesar">Rajaldesar</option>
													<option value="Rajgarh">Rajgarh</option>
													<option value="Rajsamand">Rajsamand</option>
													<option value="Ratangarh">Ratangarh</option>
													<option value="Sangaria Mandi">Sangaria Mandi</option>
													<option value="Sardarpura Jodhpur">Sardarpura Jodhpur</option>
													<option value="Sardarshahar">Sardarshahar</option>
													<option value="Sawai Madhopur Adarsh Nagar">Sawai Madhopur Adarsh Nagar</option>
													<option value="Shishoda">Shishoda</option>
													<option value="Sri Dungargarh">Sri Dungargarh</option>
													<option value="Sri Ganganagar">Sri Ganganagar</option>
													<option value="Sujangarh">Sujangarh</option>
													<option value="Suratgarh">Suratgarh</option>
													<option value="Tapra">Tapra</option>
													<option value="Taranagar">Taranagar</option>
													<option value="Udaipur">Udaipur</option>
													<option value="Udasar">Udasar</option>
													<option value="Arakonnam">Arakonnam</option>
													<option value="Chennai">Chennai</option>
													<option value="Coimbatore">Coimbatore</option>
													<option value="Erode">Erode</option>
													<option value="Gudiyatham">Gudiyatham</option>
													<option value="Kanchipuram">Kanchipuram</option>
													<option value="Madurai">Madurai</option>
													<option value="Salem">Salem</option>
													<option value="Tirupur">Tirupur</option>
													<option value="Tiruvannamalai">Tiruvannamalai</option>
													<option value="Villupuram">Villupuram</option>
													<option value="Hyderabad">Hyderabad</option>
													<option value="Agartala">Agartala</option>
													<option value="Kanpur">Kanpur</option>
													<option value="Noida">Noida</option>
													<option value="Alipurduar">Alipurduar</option>
													<option value="Behala">Behala</option>
													<option value="Changrabandha">Changrabandha</option>
													<option value="Coochbehar">Coochbehar</option>
													<option value="Dalkhola">Dalkhola</option>
													<option value="Dinhata">Dinhata</option>
													<option value="Falakata">Falakata</option>
													<option value="Hindmotor">Hindmotor</option>
													<option value="Islampur">Islampur</option>
													<option value="Jaigaon">Jaigaon</option>
													<option value="Kolkata Main">Kolkata Main</option>
													<option value="Liluah">Liluah</option>
													<option value="Malda">Malda</option>
													<option value="Mathabhanga">Mathabhanga</option>
													<option value="Murshidabad">Murshidabad</option>
													<option value="Purvanchal - Kolkata">Purvanchal - Kolkata</option>
													<option value="Raiganj">Raiganj</option>
													<option value="Sainthia">Sainthia</option>
													<option value="Siliguri">Siliguri</option>
													<option value="South Howrah">South Howrah</option>
													<option value="South kolkata">South kolkata</option>
													<option value="Tollygunge">Tollygunge</option>
													<option value="Uttar Howrah">Uttar Howrah</option>
													<option value="Uttar Kolkata">Uttar Kolkata</option>
													<option value="Uttar Madhya Kolkata">Uttar Madhya Kolkata</option>
													<option value=""></option>
													<option value="TEST Central">TEST Central</option>
												</select>
											</div>
											<div align="center">
												<div id="enterorgnizationname" style="display:none;">
													<h4 class="text-danger">Please enter organization name</h4>
												</div>
											</div>

										</div>

									</div>






									<div class="row">
										<div class="col-sm-1"></div>
										<div class="col-sm-4">
											<label for="txtemailId">Organizer Name: </label>
											<font color="red">*</font>
											<input type="text" name="organizerName" maxlength="100" value="" onkeypress="return  validateAlphaOnlyWithDotAndSpace(event,this)" class="form-control" id="txtemailId">
											<div align="center">
												<div id="enterorgname" style="display:none;">
													<h4 class="text-danger">Please enter organizer name</h4>
												</div>
											</div>

										</div>

										<div class="col-sm-1"></div>


										<div class="col-md-4">
											<label for="select">Organizer Mobile No: </label>
											<font color="red">*</font>
											<input type="text" name="organizerMobile" maxlength="10" value="" onkeypress="return validateNumeric(event)" class="form-control"> <!-- onkeypress="return validateNumeric(event)"   -->

											<div align="center">
												<div id="entermobile" style="display:none;">
													<h4 class="text-danger">Please enter mobile no.</h4>
												</div>
											</div>
											<div id="mobilelength" style="display:none;">
												<h4 class="text-danger">Mobile no. should be of length 10</h4>
											</div>

											<div id="mobileAlreadyExists" style="display:none;">
												<h4 class="text-danger">Mobile number already exists</h4>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-1"></div>
										<div class="col-md-4">
											<label for="select">Organizer Email Id: </label>
											<font color="red">*</font>
											<input type="text" name="organizerEmailId" maxlength="250" value="" class="form-control">
											<div align="center">
												<div id="enteremail" style="display:none;">
													<h4 class="text-danger">Please enter email</h4>
												</div>
											</div>

										</div>



									</div>

									<div class="row">
										<div class="col-sm-1"></div>
										<div class="col-sm-4">

											<label for="txtemailId">Co-Organizer Name: </label>
											<input type="text" name="coorganizerName" maxlength="200" value="" onkeypress="return  validateAlphaOnlyWithDotAndSpace(event,this)" class="form-control" id="txtemailId">
											<div align="center">
												<div id="entercoorganizername" style="display:none;">
													<h4 class="text-danger">Please enter co-organizer name</h4>
												</div>
											</div>

										</div>
										<div class="col-sm-1"></div>
										<div class="col-sm-4">
											<label for="txtemailId">Co-Organizer Mobile: </label>
											<input type="text" name="coorganizerMobile" maxlength="10" value="" onkeypress="return validateNumeric(event)" class="form-control" id="txtemailId">
											<div align="center">
												<div id="entercoorganizermobile" style="display:none;">
													<h4 class="text-danger">Please enter co-organizer mobile</h4>
												</div>
											</div>

										</div>

									</div>

									<div class="row">
										<div class="col-sm-1"></div>
										<div class="col-sm-4">
											<label for="txtemailId">Camp Name: </label>
											<!--  shalini -->
											<input type="text" name="campName" maxlength="100" value="" onkeypress="return  validateAlphaOnlyWithDotAndSpace(event,this)" class="form-control" id="txtemailId">




											<div align="center">
												<div id="entercampname" style="display:none;">
													<h4 class="text-danger">Please enter camp name</h4>
												</div>
											</div>

										</div>
										<div class="col-sm-1"></div>
										<div class="col-sm-4">
											<label for="txtemailId">Camp Address: </label>
											<font color="red">*</font>
											<input type="text" name="campAddress" maxlength="100" value="" class="form-control" id="txtemailId">
											<div align="center">
												<div id="entercampadd" style="display:none;">
													<h4 class="text-danger">Please enter camp address</h4>
												</div>
											</div>

										</div>
									</div>


									<div class="row">
										<div class="col-sm-1"></div>
										<div class="col-sm-4">
											<label for="donorAddressStateCode">State: </label>
											<font color="red">*</font>

											<select name="state" onchange="loadeAddressDistrictList(this.value)" class="form-control">
												<option value="-1">Select State</option>

												<option value="35">Andaman &amp; Nicobar Islands</option>
												<option value="28">Andhra Pradesh</option>
												<option value="12">Arunachal Pradesh</option>
												<option value="18">Assam</option>
												<option value="10">Bihar</option>
												<option value="94">Chandigarh</option>
												<option value="22">Chhattisgarh</option>
												<option value="26">Dadra &amp; Nagar Haveli</option>
												<option value="25">Daman &amp; Diu</option>
												<option value="97">Delhi</option>
												<option value="30">Goa</option>
												<option value="24">Gujarat</option>
												<option value="96">Haryana</option>
												<option value="92">Himachal Pradesh</option>
												<option value="91">Jammu and Kashmir</option>
												<option value="20">Jharkhand</option>
												<option value="29">Karnataka</option>
												<option value="32">Kerala</option>
												<option value="37">Ladakh</option>
												<option value="31">Lakshadweep</option>
												<option value="23">Madhya Pradesh</option>
												<option value="27">Maharashtra</option>
												<option value="14">Manipur</option>
												<option value="17">Meghalaya</option>
												<option value="15">Mizoram</option>
												<option value="13">Nagaland</option>
												<option value="21">Odisha</option>
												<option value="34">Puducherry</option>
												<option value="93">Punjab</option>
												<option value="98">Rajasthan</option>
												<option value="11">Sikkim</option>
												<option value="33">Tamil Nadu</option>
												<option value="36">Telangana</option>
												<option value="16">Tripura</option>
												<option value="95">Uttarakhand</option>
												<option value="99">Uttar Pradesh</option>
												<option value="19">West Bengal</option>
											</select>

											<div align="center">
												<div id="enterstate" style="display:none;">
													<h4 class="text-danger">Please enter state</h4>
												</div>
											</div>
										</div>
										<div class="col-sm-1"></div>
										<div class="col-sm-4">
											<label for="donorAddressStateCode">District: </label>
											<font color="red">*</font>

											<select name="district" onchange="loadBBList(this.value);" class="form-control"><!--  fetchCamps(this.value) -->

												<option value="-1">Select District</option>
											</select>

											<div align="center">
												<div id="enterdistrict" style="display:none;">
													<h4 class="text-danger">Please select district</h4>
												</div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-1"></div>
										<div class="col-sm-4">
											<label for="txtemailId">City Name: </label>
											<font color="red">*</font>
											<input type="text" name="city" maxlength="50" value="" onkeypress="return  validateAlphaOnlyWithDotAndSpace(event,this)" class="form-control" id="txtemailId">
											<div align="center">
												<div id="entercity" style="display:none;">
													<h4 class="text-danger">Please enter city name</h4>
												</div>
											</div>

										</div>

										<div class="col-sm-1"></div>
										<div class="col-sm-4">
											<label for="donorAddressStateCode">BloodBank: </label>
											<font color="red">*</font>

											<select name="bloodBank" class="form-control">
												<option value="-1">Select BloodBank</option>
											</select>
											<div align="center">
												<div id="enterbb" style="display:none;">
													<h4 class="text-danger">Please select bloodbank</h4>
												</div>
											</div>
										</div>
									</div>


									<div class="row">
										<div class="col-sm-1"></div>
										<div class="col-sm-3">
											<label>Camp Propose Date: </label>
											<font color="red">*</font>
											<input class="form-control hasDatepicker" name="campProposedDate" type="text" id="reqdatepicker" placeholder="dd-mm-yyyy" onkeydown="return false" value="17-09-2022">

											<div align="center">
												<div id="enterdate" style="display:none;">
													<h4 class="text-danger">Please enter camp proposed date</h4>
												</div>
											</div>
										</div>
										<div class="col-sm-2"></div>

										<div class="col-sm-6">
											<label for="txtemailId">Start Time(24HH:MM) : </label>
											<font color="red">*</font>
											<label for="txtemailId">End Time:(24HH:MM) :</label>
											<font color="red">*</font>


											<div class="row">
												<div class="col-sm-1">

													<input type="text" name="startTimeHH" onkeypress="return validateNumeric(event)" class="form-control" maxlength="2" style="width:50px" value="09">
												</div>
												<div class="col-sm-2">

													<input type="text" name="startTimeMM" onkeypress="return validateNumeric(event)" class="form-control" maxlength="2" style="width:50px" value="00">
												</div>


												<!-- <div class="row"> -->
												<div class="col-sm-1">

													<input type="text" name="endTimeHH" class="form-control" onkeypress="return validateNumeric(event)" maxlength="2" style="width:50px" value="17">
												</div>
												<div class="col-sm-1">

													<input type="text" name="endTimeMM" class="form-control" onkeypress="return validateNumeric(event)" maxlength="2" style="width:50px" value="00">
												</div>
												<div class="col-sm-1"></div>

											</div>
											<!-- </div> -->
											<div align="center">
												<div id="enterstartHH" style="display:none;">
													<h4 class="text-danger">Please enter start time hour</h4>
												</div>
											</div>
											<div align="center">
												<div id="enterstartMM" style="display:none;">
													<h4 class="text-danger">Please enter start time minutes</h4>
												</div>
											</div>


											<div align="center">
												<div id="enterendHH" style="display:none;">
													<h4 class="text-danger">Please enter end time hour</h4>
												</div>
											</div>
											<div align="center">
												<div id="enterendMM" style="display:none;">
													<h4 class="text-danger">Please enter end time minutes</h4>
												</div>
											</div>

										</div>
										<!-- <div class="col-sm-2">
								
								</div> -->




									</div>
									<!-- shalini -->
									<div class="row">
										<div class="col-sm-1"></div>

										<div class="col-sm-4">
											<label for="txtemailId">Latitude: </label>
											<input type="text" name="latitude" maxlength="10" value="" onkeypress="return validateNumericwithDot(event)" class="form-control" id="txtemailId">
											<div align="center">

											</div>

										</div>


										<div class="col-sm-1"></div>
										<div class="col-sm-4">
											<label for="txtemailId">Longitude: </label>
											<input type="text" name="longitude" maxlength="10" value="" onkeypress="return validateNumericwithDot(event)" class="form-control" id="txtemailId">
											<div align="center">

											</div>

										</div>
									</div>


									<div class="row">
										<div class="col-sm-1"></div>
										<!-- <div class="col-sm-4">
			                          <label >Camp Society:</label><font color="red">*</font> 
										<input class="form-control" name ="campSocietyName" type="text" >  
	              
									<div align="center">
										<div id="entercampsociety"  style="display:none;">
											<h4 class="text-danger">Please enter camp society name</h4>
										</div>
									</div>
						
			</div>
			<div class="col-sm-1"	></div> -->
										<div class="col-sm-4">
											<label for="txtemailId">Estimated Participants: </label>
											<font color="red">*</font>
											<input type="text" name="estimatedParticipants" maxlength="5" value="" onkeypress="return validateNumeric(event)" class="form-control" id="txtemailId">
											<div align="center">
												<div id="enterestimatedparticipants" style="display:none;">
													<h4 class="text-danger">Please enter estimated participants</h4>
												</div>
											</div>

										</div>


										<div class="col-sm-1"></div>
										<div class="col-sm-4">
											<label for="txtemailId">Refernce/Camp Supporter(Prayojak): </label>
											<input type="text" name="campSupporter" maxlength="200" value="" class="form-control" id="txtemailId">
											<div align="center">
												<div id="entersupporter" style="display:none;">
													<h4 class="text-danger">Please enter Refernce/Camp Supporter(Prayojak)</h4>
												</div>
											</div>

										</div>
									</div>
									<div class="row">
										<div class="col-sm-1"></div>

										<div class="col-sm-4">
											<label for="txtemailId">Remarks: </label>
											<input type="text" name="remarks" maxlength="254" value="" class="form-control" id="txtemailId">
											<div align="center">
												<div id="enterremarks" style="display:none;">
													<h4 class="text-danger">Please enter remarks</h4>
												</div>
											</div>

										</div>
									</div>


									<br><br>
									<div class="row">

										<!-- <div class="col-md-4" > -->
										<div class="col-md-12" align="center">
											<button type="button" class="btn btn-success" onclick="signup()" onkeypress="if(event.keyCode==13) signup()">Submit</button>
											<button type="button" class="btn btn-danger" id="gotomainpage">Cancel</button>
										</div>
										<!-- </div>  -->

									</div>


									<br>
								</div>

							</div>

						</div>

					</div>
				</div>
			</div>

			<!-- Near By Camps code -->



			<!-- Ends  -->
			<!-- OTP Generation -->
			<div class="container" id="OTPGENERATION" style="display:none">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-sm-4"></div>
							<div class="col-sm-2">
								<label>Enter OTP</label>
								<font color="red">*</font>
								<input type="text" name="otp" maxlength="6" tabindex="1" value="" class="form-control">

							</div>

						</div>
						<div class="row">

							<div class="col-sm-3"></div>
							<div class="col-sm-4">
								<h6 align="center">(OTP has been send to your Email/Mobile)</h6>
							</div>

						</div>
						<div class="row">
							<div class="col-sm-3"></div>
							<div class="col-sm-4">
								<p id="hideMsgs" align="center">Your OTP will expire in <span id="min"> 04</span> : <span id="secn"> 59</span> seconds</p>
							</div>
						</div>

						<div class="row" style="display:none" id="OtpResend">
							<div class="col-sm-4"></div>
							<div class="col-sm-3">
								<h6> OTP has been RESEND</h6>
							</div>
						</div>
						<div class="row" style="display:none" id="expiryOTP">
							<div class="col-sm-4"></div>
							<div class="col-sm-4">
								<h5 class="text-danger">OTP Expired !!!</h5>
							</div>
						</div>
						<div class="row" style="display:none" id="invalidOTP">
							<div class="col-sm-4"></div>
							<div class="col-sm-4">
								<h5 class="text-danger">Invalid OTP!!!</h5>
							</div>
						</div>
						<div class="row" style="display:none" id="resendOTP">
							<div class="col-sm-4"></div>
							<div class="col-sm-3">
								<a onclick="reesendOTP()">
									<font color="red"><b>Resend OTP</b></font>
								</a>
							</div>

						</div><br>
						<div class="row" id="validateOTP">
							<div class="col-md-3"></div>
							<div class="col-md-4">
								<!-- <button style="align:center;" id="validate" type="button" class="btn btn-lg btn-primary btn-block btn-danger" onclick="verifyOTP()" onkeypress="if(event.keyCode==13) verifyOTP()" type="submit">Validate</button> -->
								<button style="align:center;" id="validate" type="button" class="btn btn-outline-danger" onclick="verifyOTP()" onkeypress="if(event.keyCode==13) verifyOTP()">Validate</button>
								<button style="align:center;" type="button" class="btn btn-outline-danger" onclick="window.location.href='/BLDAHIMS/bloodbank/onlineCampRequestNewBB.cnt?hmode=LOGINSTATS'">Cancel</button>
							</div>
						</div>

					</div>
				</div>
			</div>
			<!-- Ends -->
			<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel" style="color:red"><i class="fas fa-exclamation-triangle" aria-hidden="true"> </i>
							</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<h6>Mobile No is already registered ,please login for further requesting camp.</h6>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

						</div>
					</div>
				</div>
			</div>


			<!-- Modal For Camps  -->


			<!-- Modal -->
			<div class="modal fade" id="staticBackdrop" data-mdb-backdrop="static" data-mdb-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-xl">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="staticBackdropLabel">
								<font color="red">Camps Conducted/To Be Conducted NearBy Your district In Last And Coming 7 Days</font>
							</h4>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">

							<!-- <div class="container" id="nearByCamps" >
		<div class="card"> -->
							<div class="card-body">
								<table id="example" class="table table-striped table-bordered hover" style="width:100%">
									<thead>
										<tr>

											<th>Camp Name</th>
											<th>Camp Date</th>
											<th>Camp Venue</th>
											<th>Camp City</th>


										</tr>
									</thead>
									<tbody>

									</tbody>
								</table>
								<!-- </div>
		</div> -->
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">
								Close
							</button>

						</div>
					</div>
				</div>
			</div>

			<!-- Ends -->
			<!--Ends  -->




			<!-- Do not modify this include list -->
			<script src="../hisglobal/bbpublic/assets/elements/js/bootstrap.min.js"></script>
			<!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> -->

			<!--[if lt IE 9]><script src="../../hisglobal/bbpublic/assets/js/html5shiv.min.js"></script><![endif]-->
			<!--[if lt IE 9]><script src="../../hisglobal/bbpublic/assets/js/respond.min.js"></script><![endif]-->
			<script src="../hisglobal/bbpublic/assets/elements/js/wow.js"></script>
			<script src="../hisglobal/bbpublic/assets/elements/js/script.js"></script>
			<!--       <script type="text/javascript" src="../hisglobal/bbpublic/assets/elements/js/captcha.js"></script> -->
			<script src="../hisglobal/bbpublic/assets/js/modernizr-custom.js"></script>

			<script type="text/javascript">
				//code by deepak
				//**************************************************************************//


				var transformZoom = 1;
				var cssZoom = 100;



				$('.make_greater').click(function() {
					//alert('hello');
					var step;

					if (Modernizr.testProp('zoom') === true) {

						step = 5;
						cssZoom += step;
						$('body').css('zoom', ' ' + cssZoom + '%');
					} else {
						console.log('no css zoom');
						step = 0.05;
						transformZoom += step;

						$('html').css('MozTransform', 'scale(' + transformZoom + ',' + transformZoom + ')');
						$('html').css('transform-origin', 'top center');
					}
				});




				$('.make_smaller').click(function() {
					var step;
					//only firefox create problem
					if (Modernizr.testProp('zoom') === true) {
						console.log('CSS zoom supported');

						step = 5;
						cssZoom -= step;
						$('body').css('zoom', ' ' + cssZoom + '%');
					} else {
						console.log('no css zoom');
						step = 0.05;
						transformZoom -= step;
						$('html').css('MozTransform', 'scale(' + transformZoom + ',' + transformZoom + ')');
						console.log('no css zoom 1');
						$('html').css('transform-origin', 'top center');
						console.log('no css zoom 2');
					}
				});


				$('#reset').click(function() {
					//$("*").css("font-size", 14);   
					// document.body.style.zoom="100%"
					cssZoom = 100;
					if (Modernizr.testProp('zoom') === true) {
						$('body').css('zoom', ' ' + 100 + '%');
					} else {
						console.log('no css zoom');
						transformZoom = 1;
						$('html').css('MozTransform', 'scale(' + 1 + ',' + 1 + ')');
						$('html').css('transform-origin', 'top center');
					}
					console.log('cssZoom');
				}); <
				!--
				//************************************************************************//

				//-->
				$("#dark").click(function() {

					$("section").toggleClass("darkbg1");
					$("header").toggleClass("darkbg1");
					$("ul").toggleClass("darkbg1");
					$("li").toggleClass("darkbg1");
					$("a").toggleClass("darkbg2");
					$("hr").toggleClass("darkbg2");
					$("td").toggleClass("darkbg3");

					$(".toggle1").toggleClass("darkbg1");
					$(".toggle2").toggleClass("darkbg2");
					$("body").toggleClass("darkbg1");
					//	$(".toggle3").toggleClass("darkbg3");



				});



				$(function() {
					$('a[href^="http"]').each(function() {
						$(this).on('click', function() {
							return external_link()
						});
					});


				});

				function external_link() {
					return 1 == confirm('Youre about to leave www.eRaktKosh.in.\nThis is a link to external website/content. This site does not belong to eRaktkosh and hence eRaktkosh shall not be liable in any case.\nPlease Continue at your own risk.') ? !0 : !1
				}
				$.urlParam = function(name) {
					var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
					if (results == null) {
						return null;
					} else {
						return results[1] || 0;
					}
				}
			</script>
			<script>
				(function(i, s, o, g, r, a, m) {
					i['GoogleAnalyticsObject'] = r;
					i[r] = i[r] || function() {
						(i[r].q = i[r].q || []).push(arguments)
					}, i[r].l = 1 * new Date();
					a = s.createElement(o),
						m = s.getElementsByTagName(o)[0];
					a.async = 1;
					a.src = g;
					m.parentNode.insertBefore(a, m)
				})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

				ga('create', 'UA-73827792-1', 'auto');
				ga('send', 'pageview');
			</script>








			<input type="hidden" name="hmode" value="">
		</form>


		<script>
			function loadeAddressDistrictList(stateCode) {

				$.getJSON("/BLDAHIMS/bloodbank/nearbyBB.cnt?hmode=GETDISTRICTLIST", {
					selectedStateCode: stateCode
				}, function(data) {
					$('select[name="district"]').empty();
					$('select[name="district"]').append($("<option></option>").text('Select District').val(-1));
					$.each(data.records, function(index, item) { // Iterates through a collection
						console.log(item.id);
						$('select[name="district"]').append( // Append an object to the inside of the select box
							$("<option></option>").text(item.id).val(item.value));
					});

				});
			}

			function loadBBList(distCode) {
				var stateCode = $('select[name="state"]').val();
				$.getJSON("/BLDAHIMS/bloodbank/portalThalassemiaLogin.cnt?hmode=GETBBLIST", {
					selectedStateCode: stateCode,
					selectedDistrictCode: distCode,
					hospitalType: 1
				}, function(data) {
					$('select[name="bloodBank"]').empty();
					$('select[name="bloodBank"]').append($("<option></option>").text('Select BloodBank').val(-1));
					if (data.records.length == 0) {
						alert("No BloodBank Found for selection");
						return;
					}
					$.each(data.records, function(index, item) { // Iterates through a collection
						console.log(item.id);
						$('select[name="bloodBank"]').append( // Append an object to the inside of the select box
							$("<option></option>").text(item.id).val(item.value));
					});

				});
			}
			$(function() {
				$("#reqdatepicker").datepicker({
					dateFormat: "dd-mm-yy",
					minDate: "0",
					maxDate: "90"

					//yearRange: "-100:-18"
				});
			});


			function signup() {
				//alert($("select[name = gender]").val());


				//commented by shalini	
				if (document.getElementsByName("organizationType")[0].value == '0') {
					$("#organizationType").show();
					$("#enterstartHH").hide();
					$("#enterstartMM").hide();
					$("#enterendHH").hide();
					$("#enterendMM").hide();
					$("#enterdate").hide();
					$("#enterbb").hide();
					$("#enterdistrict").hide();
					$("#enterstate").hide();
					$("#entercity").hide();
					$("#entercampname").hide();
					$("#entercampadd").hide();
					$("#enterestimatedparticipants").hide();


				} else if ($("input[name = organizationName]").val().trim() == '') {
					$("#enterorgnizationname").show();
					$("#enterstartHH").hide();
					$("#enterstartMM").hide();
					$("#enterendHH").hide();
					$("#enterendMM").hide();
					$("#enterdate").hide();
					$("#enterbb").hide();
					$("#enterdistrict").hide();
					$("#enterstate").hide();
					$("#entercity").hide();
					$("#entercampname").hide();
					$("#entercampadd").hide();
					$("#enteremail").hide();
					$("#enterestimatedparticipants").hide();
					$("#enterorgname").hide();
					$("input[name = organizationName]").focus();
				} else if ($("input[name = organizerName]").val().trim() == '') {
					$("#enterorgname").show();
					$("#enterstartHH").hide();
					$("#enterstartMM").hide();
					$("#enterendHH").hide();
					$("#enterendMM").hide();
					$("#enterdate").hide();
					$("#enterbb").hide();
					$("#enterdistrict").hide();
					$("#enterstate").hide();
					$("#entercity").hide();
					$("#entercampname").hide();
					$("#entercampadd").hide();
					$("#enterorgnizationname").hide();
					$("#enteremail").hide();
					$("#enterestimatedparticipants").hide();
					$("input[name = organizerName]").focus();
				}

				/* else if ($("input[name = OrganizerAge]").val().trim() == ''){
	   $("#enterage").show();
	   $("#enterorgname").hide();
	    $("#enterstartHH").hide();
	    $("#enterstartMM").hide();
		$("#enterendHH").hide();
		$("#enterendMM").hide();
	    $("#enterdate").hide();
		$("#enterbb").hide();
		$("#enterdistrict").hide();
		$("#enterstate").hide();
		$("#entercity").hide();
		$("#entercampname").hide();
		$("#entercampadd").hide();
		$("input[name = OrganizerAge]").focus();
	} 
	
   else if ($("select[name = gender]").val() == -1){
	   $("#entergender").show();
	   $("#enterage").hide();
	   $("#enterorgname").hide();
	    $("#enterstartHH").hide();
	    $("#enterstartMM").hide();
		$("#enterendHH").hide();
		$("#enterendMM").hide();
	    $("#enterdate").hide();
		$("#enterbb").hide();
		$("#enterdistrict").hide();
		$("#enterstate").hide();
		$("#entercity").hide();
		$("#entercampname").hide();
		$("#entercampadd").hide();
		$("select[name = gender]").focus();
	}
	*/
				else if ($("input[name = organizerMobile]").val().trim() == '') {
					$("#entermobile").show();
					$("#entergender").hide();
					$("#enterage").hide();
					$("#enterorgname").hide();
					$("#enterstartHH").hide();
					$("#enterstartMM").hide();
					$("#enterendHH").hide();
					$("#enterendMM").hide();
					$("#enterdate").hide();
					$("#enterbb").hide();
					$("#enterdistrict").hide();
					$("#enterstate").hide();
					$("#entercity").hide();
					$("#entercampname").hide();
					$("#entercampadd").hide();
					$("#enterorgnizationname").hide();
					$("#enterestimatedparticipants").hide();
					$("#enteremail").hide();
					$("input[name = organizerMobile]").focus();
				} else if ($("input[name = organizerEmailId]").val().trim() == '') {
					$("#enteremail").show();
					$("#entermobile").hide();
					$("#entergender").hide();
					$("#enterage").hide();
					$("#enterorgname").hide();
					$("#enterstartHH").hide();
					$("#enterstartMM").hide();
					$("#enterendHH").hide();
					$("#enterendMM").hide();
					$("#enterdate").hide();
					$("#enterbb").hide();
					$("#enterdistrict").hide();
					$("#enterstate").hide();
					$("#entercity").hide();
					$("#entercampname").hide();
					$("#entercampadd").hide();
					$("#enterorgnizationname").hide();
					$("#enterestimatedparticipants").hide();

					$("input[name = organizerEmailId]").focus();
				}


				/* else if($("input[name = campName]").val().trim().length == 0){
		$("#entercampname").show();
		$("input[name = campName]").focus();
	}*/
				else if ($("input[name = campAddress]").val().trim().length == 0) {
					$("#entercampadd").show();
					$("#entercampname").hide();
					$("input[name = campAddress]").focus();
				} else if (document.getElementsByName('state')[0].value == "-1") {
					$("#enterstate").show();
					document.getElementsByName("state")[0].focus();

				} else if (document.getElementsByName('district')[0].value == "-1") {
					$("#enterdistrict").show();
					$("#enterstate").hide();
					document.getElementsByName("district")[0].focus();

				} else if ($("input[name = city]").val().trim().length == 0) {
					$("#entercity").show();
					$("#entercampname").hide();
					$("#entercampadd").hide();
					$("input[name = city]").focus();
				} else if ($("select[name = state]").val() == -1) {
					$("#enterstate").show();
					$("#entercity").hide();
					$("#entercampname").hide();
					$("#entercampadd").hide();
					$("select[name = state]").focus();
				} else if ($("select[name = district]").val() == -1) {

					$("#enterdistrict").show();
					$("#enterstate").hide();
					$("#entercity").hide();
					$("#entercampname").hide();
					$("#entercampadd").hide();
					$("select[name = district]").focus();
				} else if ($("select[name = bloodBank]").val() == -1) {

					$("#enterbb").show();
					$("#enterdistrict").hide();
					$("#enterstate").hide();
					$("#entercity").hide();
					$("#entercampname").hide();
					$("#entercampadd").hide();
					$("select[name = bloodbank]").focus();
				} else if ($("input[name = campProposedDate]").val() == '') {
					$("#enterdate").show();
					$("#enterbb").hide();
					$("#enterdistrict").hide();
					$("#enterstate").hide();
					$("#entercity").hide();
					$("#entercampname").hide();
					$("#entercampadd").hide();
					$("input[name = campProposedDate]").focus();
				} else if ($("input[name = startTimeHH]").val().trim() == '') {
					$("#enterstartHH").show();
					$("#enterdate").hide();
					$("#enterbb").hide();
					$("#enterdistrict").hide();
					$("#enterstate").hide();
					$("#entercity").hide();
					$("#entercampname").hide();
					$("#entercampadd").hide();
					$("input[name = startTimeHH]").focus();
				} else if ($("input[name = startTimeMM]").val().trim() == '') {
					$("#enterstartHH").hide();
					$("#enterstartMM").show();
					$("#enterdate").hide();
					$("#enterbb").hide();
					$("#enterdistrict").hide();
					$("#enterstate").hide();
					$("#entercity").hide();
					$("#entercampname").hide();
					$("#entercampadd").hide();
					$("input[name = startTimeMM]").focus();
				} else if ($("input[name = endTimeHH]").val().trim() == '') {
					$("#enterstartHH").hide();

					$("#enterstartMM").hide();

					$("#enterendHH").show();
					$("#enterbb").hide();
					$("#enterdistrict").hide();
					$("#enterstate").hide();
					$("#entercity").hide();
					$("#entercampname").hide();
					$("#entercampadd").hide();
					$("input[name = endTimeHH]").focus();
				} else if ($("input[name = endTimeMM]").val().trim() == '') {
					$("#enterstartHH").hide();
					$("#enterstartMM").hide();
					$("#enterendHH").hide();
					$("#enterendMM").show();
					$("#enterdate").hide();
					$("#enterbb").hide();
					$("#enterdistrict").hide();
					$("#enterstate").hide();
					$("#entercity").hide();
					$("#entercampname").hide();
					$("#entercampadd").hide();
					$("input[name = endTimeMM]").focus();
				} else if ($("input[name = estimatedParticipants]").val().trim() == '') {
					$("#enterestimatedparticipants").show();
					$("#entermobile").hide();
					$("#entergender").hide();
					$("#enterage").hide();
					$("#enterorgname").hide();
					$("#enterstartHH").hide();
					$("#enterstartMM").hide();
					$("#enterendHH").hide();
					$("#enterendMM").hide();
					$("#enterdate").hide();
					$("#enterbb").hide();
					$("#enterdistrict").hide();
					$("#enterstate").hide();
					$("#entercity").hide();
					$("#entercampname").hide();
					$("#entercampadd").hide();
					$("#enterorgnizationname").hide();
					$("input[name = estimatedParticipants]").focus();
				}

				/*else if ($("input[name = password]").val().trim() == ''){
	   $("#enterpassword").show();
	   $("#enteremail").hide();
	   $("#entermobile").hide();
	   $("#entergender").hide();
	   $("#enterage").hide();
	   $("#enterorgname").hide();
	    $("#enterstartHH").hide();
	    $("#enterstartMM").hide();
		$("#enterendHH").hide();
		$("#enterendMM").hide();
	    $("#enterdate").hide();
		$("#enterbb").hide();
		$("#enterdistrict").hide();
		$("#enterstate").hide();
		$("#entercity").hide();
		$("#entercampname").hide();
		$("#entercampadd").hide();
		$("input[name = password]").focus();
	}
   else if ($("input[name = confirmPassword]").val().trim() == ''){
	   $("#enterconfirmpassword").show();
	   $("#enterpassword").hide();
	   $("#enteremail").hide();
	   $("#entermobile").hide();
	   $("#entergender").hide();
	   $("#enterage").hide();
	   $("#enterorgname").hide();
	    $("#enterstartHH").hide();
	    $("#enterstartMM").hide();
		$("#enterendHH").hide();
		$("#enterendMM").hide();
	    $("#enterdate").hide();
		$("#enterbb").hide();
		$("#enterdistrict").hide();
		$("#enterstate").hide();
		$("#entercity").hide();
		$("#entercampname").hide();
		$("#entercampadd").hide();
		$("input[name = confirmPassword]").focus();
	}else{ */
				/* if(!passwordValidation())
				return; */
				//epassHash();
				/* $("#mainContainer").hide();
				$("#OTPGENERATION").show();
				otpTimer();
				generateOTP(); */
				//document.forms[0].submit('NEW');
				else {
					//Shalini

					submitForm('REGISTER');


				}
				//}
			}

			function passwordValidation() {

				var flag = false;
				var pswrd = $("input[name = confirmPassword]").val();
				var cnfrmpswrd = $("input[name = password]").val();
				if (pswrd < 6 || cnfrmpswrd < 6) {
					$("#enterpasswordlength").show();
					return flag;
				} else if (pswrd != cnfrmpswrd) {
					$("#passwordmismatch").show();
					return flag;
				} else {
					flag = true;
					$("#passwordmismatch").hide();
					return flag;
				}
			}

			function generateOTP() {

				var mobile = $("input[name=organizerMobile]").val();
				$.ajax({
					url: '/BLDAHIMS/bloodbank/onlineCampRequestNewBB.cnt?hmode=GENERATEOTP',
					data: {

						mobileNo: mobile
					}

				}).done(function(data) {
					alert(data);
				});

			}

			function verifyOTP() {

				var mobile = $("input[name=organizerMobile]").val();
				var otp = $("input[name=otp]").val();
				$.ajax({
					url: '/BLDAHIMS/bloodbank/onlineCampRequestNewBB.cnt?hmode=VERIFYOTP',
					data: {

						mobile: mobile,
						otp: otp

					}
				}).done(function(data) {
					data = jQuery.parseJSON(data);
					alert(data["flag"]);
					if (data != '') {

						if (data["flag"] == '1') {
							submitForm('REGISTER');
						} else if (data["flag"] == '2') {

							$("#invalidOTP").show();
						} else if (data["flag"] == '3') {

						} else {

						}
					}

				});

			}

			function otpTimer() {
				$("#validate").removeAttr("disabled");
				$('#min').text("00");
				$('#secn').text("15");
				//parseInt($('#hideMsgs span').text("60"))
				var min = parseInt($('#min').text()); // || 0;
				var sec = parseInt($('#secn').text());
				var timer = setInterval(function() {
					/* if(min == 0)
	{
		$('#secn').text("59");
       var secnds = parseInt($('#secn').text());
       //alert(secnds);
       sec = 59;
	} */

					$('#secn').text(--sec);

					if (sec < 10) {
						$('#secn').text("0" + sec);
					}
					if (sec < 0) {
						$('#secn').text("59");
						var secnd = parseInt($('#secn').text());
						sec = secnd;
						$('#min').text(--min);
						if (min < 10) {
							$('#min').text("0" + min);
						}

					}
					/*   if (sec == 1)
					  {
					     
					  } */


					if (min == 0 && sec == 0) {
						$('#hideMsgs').fadeOut('fast');
						clearInterval(timer);
						$("#invalidOTP").hide();
						$("#expiryOTP").show();
						$("#resendOTP").show();
						//$("#invalidEmail").hide();
						$("#blankOTP").hide();
						$("#OtpResend").hide();
						$("#validate").attr("disabled", "disabled");
					}


				}, 1000);
			}

			function epassHash() {
				var isSuccess;
				//var uname = document.getElementsByName("donorName")[0].value;
				var pwd = document.getElementsByName("password")[0].value;
				var pwd1 = document.getElementsByName("confirmPassword")[0].value;
				// var saltedPass =  uname + pwd;
				var saltedPass = pwd;
				var saltedPass1 = pwd1;
				var hashObj = new jsSHA(saltedPass, "ASCII");
				var hashObj1 = new jsSHA(saltedPass1, "ASCII");
				try {
					hashedPass = hashObj.getHash("SHA-1", "HEX");
					hashedPass1 = hashObj1.getHash("SHA-1", "HEX");

				} catch (e) {
					isSuccess = false;
				}
				//alert(hashedPass);
				document.getElementsByName("password")[0].value = hashedPass;
				document.getElementsByName("confirmPassword")[0].value = hashedPass1;
			}

			function submitForm(mode) {
				//alert(	document.getElementsByName("password")[0].value);return;
				document.getElementsByName('hmode')[0].value = mode;
				document.forms[0].submit();
			}

			function reesendOTP() {
				generateOTP();
				otpTimer();
				$("#hideMsgs").show();
				$("#OtpResend").hide();
				$("#expiryOTP").hide();
				$("#resendOTP").hide();
			}
			$(document).ready(function() {
				/*	$("input[name=organizerMobile]").blur(function(){
							
						$.ajax({
							url : '/BLDAHIMS/bloodbank/onlineCampRequestNewBB.cnt?hmode=ISORGANIZEREXIST'
							,data : {
								mobile : $("input[name=organizerMobile]").val()
							}		
						}).done(function(data){
							data = jQuery.parseJSON(data);
							$("#exampleModal").modal('show');
							if( data["status"] == "1" && data["isExist"] == "1"){
								
							}
						});
					});
					*/


				$("#gotomainpage").click(function(data) {

					//window.location.href = '/BLDAHIMS/bloodbank/onlineCampRequestNewBB.cnt?hmode=LOGINSTATS';
					window.location.href = '/BLDAHIMS/bloodbank/transactions/bbpublicindex.php';
				});

				/* $("#staticBackdrop").modal('show'); */


				$(".tour_3").addClass("d-none");
				$(".tour_4").addClass("d-none");
			});

			function fetchCamps(districtCode) {

				$.ajax({
					url: '/BLDAHIMS/bloodbank/onlineCampRequestNewBB.cnt?hmode=FETCH_NEARBY_CAMPS',
					data: {
						districtCode: districtCode
					}
				}).done(function(data) {
					data = jQuery.parseJSON(data);
					if (data.length > 0) {
						/* $("#nearByCamps").show(); */
						var table = $(".table").find("tbody");
						var t = $("#example").DataTable();
						t.destroy();
						table.empty();

						for (var i = 0; i < data.length; i++) {
							var html = "<tr>";
							html += "<td>" + data[i].campName + "</td>";
							html += "<td>" + data[i].campDate + "</td>";
							html += "<td>" + data[i].campVenue + "</td>";
							html += "<td>" + data[i].campDistrict + "</td>";
							/* html += "<td>" +data[i].campOrganizer+ "</td>"; */
							table.append(html);
						}
						$("#example").DataTable({
							"lengthMenu": [4, 10]
						});
						$("#staticBackdrop").modal('show');
					}
				});

			}

			function validateOtp() {

				submitForm('REGISTER');
			}
		</script>
		<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>
		<div id="torrent-scanner-popup" style="display: none;"></div>
</body>