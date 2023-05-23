 <?php 
 $Submit=false;
 ?>
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
$insert=false;

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
    <style>
        .LGLeeN-keyboard-shortcuts-view {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex
        }

        .LGLeeN-keyboard-shortcuts-view table,
        .LGLeeN-keyboard-shortcuts-view tbody,
        .LGLeeN-keyboard-shortcuts-view td,
        .LGLeeN-keyboard-shortcuts-view tr {
            background: inherit;
            border: none;
            margin: 0;
            padding: 0
        }

        .LGLeeN-keyboard-shortcuts-view table {
            display: table
        }

        .LGLeeN-keyboard-shortcuts-view tr {
            display: table-row
        }

        .LGLeeN-keyboard-shortcuts-view td {
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            display: table-cell;
            color: #000;
            padding: 6px;
            vertical-align: middle;
            white-space: nowrap
        }

        .LGLeeN-keyboard-shortcuts-view td .VdnQmO-keyboard-shortcuts-view--shortcut-key {
            background-color: #e8eaed;
            border-radius: 2px;
            border: none;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            color: inherit;
            display: inline-block;
            font-family: Google Sans Text, Roboto, Arial, sans-serif;
            line-height: 16px;
            margin: 0 2px;
            min-height: 20px;
            min-width: 20px;
            padding: 2px 4px;
            position: relative;
            text-align: center
        }
    </style>
    <style>
        #form {
            position: relative;
            top: -148px;
        }
    </style>
    <style>
        .gm-control-active>img {
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box;
            box-sizing: content-box;
            display: none;
            left: 50%;
            pointer-events: none;
            position: absolute;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            -o-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%)
        }

        .gm-control-active>img:nth-child(1) {
            display: block
        }

        .gm-control-active:focus>img:nth-child(1),
        .gm-control-active:hover>img:nth-child(1),
        .gm-control-active:active>img:nth-child(1),
        .gm-control-active:disabled>img:nth-child(1) {
            display: none
        }

        .gm-control-active:focus>img:nth-child(2),
        .gm-control-active:hover>img:nth-child(2) {
            display: block
        }

        .gm-control-active:active>img:nth-child(3) {
            display: block
        }

        .gm-control-active:disabled>img:nth-child(4) {
            display: block
        }

        sentinel {}
    </style>
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Google+Sans:400,500,700|Google+Sans+Text:400&amp;lang=en">
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Google+Sans+Text:400&amp;text=%E2%86%90%E2%86%92%E2%86%91%E2%86%93&amp;lang=en">
    <style>
        .gm-ui-hover-effect {
            opacity: .6
        }

        .gm-ui-hover-effect:hover {
            opacity: 1
        }

        .gm-ui-hover-effect>span {
            background-color: #000
        }

        @media (forced-colors:active),
        (prefers-contrast:more) {
            .gm-ui-hover-effect>span {
                background-color: ButtonText
            }
        }

        sentinel {}
    </style>
    <style>
        .gm-style .gm-style-cc a,
        .gm-style .gm-style-cc button,
        .gm-style .gm-style-cc span,
        .gm-style .gm-style-mtc div {
            font-size: 10px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box
        }

        .gm-style .gm-style-cc a,
        .gm-style .gm-style-cc button,
        .gm-style .gm-style-cc span {
            outline-offset: 3px
        }

        sentinel {}
    </style>
    <style>
        @media print {

            .gm-style .gmnoprint,
            .gmnoprint {
                display: none
            }
        }

        @media screen {

            .gm-style .gmnoscreen,
            .gmnoscreen {
                display: none
            }
        }
    </style>
    <style>
        .dismissButton {
            background-color: #fff;
            border: 1px solid #dadce0;
            color: #1a73e8;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            font-family: Roboto, sans-serif;
            font-size: 14px;
            height: 36px;
            cursor: pointer;
            padding: 0 24px
        }

        .dismissButton:hover {
            background-color: rgba(66, 133, 244, .04);
            border: 1px solid #d2e3fc
        }

        .dismissButton:focus {
            background-color: rgba(66, 133, 244, .12);
            border: 1px solid #d2e3fc;
            outline: 0
        }

        .dismissButton:focus:not(:focus-visible) {
            background-color: #fff;
            border: 1px solid #dadce0;
            outline: none
        }

        .dismissButton:focus-visible {
            background-color: rgba(66, 133, 244, .12);
            border: 1px solid #d2e3fc;
            outline: 0
        }

        .dismissButton:hover:focus {
            background-color: rgba(66, 133, 244, .16);
            border: 1px solid #d2e2fd
        }

        .dismissButton:hover:focus:not(:focus-visible) {
            background-color: rgba(66, 133, 244, .04);
            border: 1px solid #d2e3fc
        }

        .dismissButton:hover:focus-visible {
            background-color: rgba(66, 133, 244, .16);
            border: 1px solid #d2e2fd
        }

        .dismissButton:active {
            background-color: rgba(66, 133, 244, .16);
            border: 1px solid #d2e2fd;
            -webkit-box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .3), 0 1px 3px 1px rgba(60, 64, 67, .15);
            -moz-box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .3), 0 1px 3px 1px rgba(60, 64, 67, .15);
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .3), 0 1px 3px 1px rgba(60, 64, 67, .15)
        }

        .dismissButton:disabled {
            background-color: #fff;
            border: 1px solid #f1f3f4;
            color: #3c4043
        }

        sentinel {}
    </style>
    <style>
        .gm-style-moc {
            background-color: rgba(0, 0, 0, .45);
            pointer-events: none;
            text-align: center;
            -webkit-transition: opacity ease-in-out;
            -o-transition: opacity ease-in-out;
            transition: opacity ease-in-out
        }

        .gm-style-mot {
            color: white;
            font-family: Roboto, Arial, sans-serif;
            font-size: 22px;
            margin: 0;
            position: relative;
            top: 50%;
            -moz-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%)
        }

        sentinel {}
    </style>
    <style>
        .gm-style img {
            max-width: none;
        }

        .gm-style {
            font: 400 11px Roboto, Arial, sans-serif;
            text-decoration: none;
        }
    </style>
    <style>
        .pac-container {
            background-color: #fff;
            position: absolute !important;
            z-index: 1000;
            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
            border-radius: 2px;
            border-top: 1px solid #d9d9d9;
            font-family: Arial, sans-serif;
            -webkit-box-shadow: 0 2px 6px rgba(0, 0, 0, .3);
            -moz-box-shadow: 0 2px 6px rgba(0, 0, 0, .3);
            box-shadow: 0 2px 6px rgba(0, 0, 0, .3);
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            overflow: hidden
        }

        .pac-logo:after {
            content: "";
            padding: 1px 1px 1px 0;
            height: 18px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            text-align: right;
            display: block;
            background-image: url(https://maps.gstatic.com/mapfiles/api-3/images/powered-by-google-on-white3.png);
            background-position: right;
            background-repeat: no-repeat;
            -moz-background-size: 120px 14px;
            background-size: 120px 14px
        }

        .hdpi.pac-logo:after {
            background-image: url(https://maps.gstatic.com/mapfiles/api-3/images/powered-by-google-on-white3_hdpi.png)
        }

        .pac-item {
            cursor: default;
            padding: 0 4px;
            -o-text-overflow: ellipsis;
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
            line-height: 30px;
            text-align: left;
            border-top: 1px solid #e6e6e6;
            font-size: 11px;
            color: #515151
        }

        .pac-item:hover {
            background-color: #fafafa
        }

        .pac-item-selected,
        .pac-item-selected:hover {
            background-color: #ebf2fe
        }

        .pac-matched {
            font-weight: 700
        }

        .pac-item-query {
            font-size: 13px;
            padding-right: 3px;
            color: #000
        }

        .pac-icon {
            width: 15px;
            height: 20px;
            margin-right: 7px;
            margin-top: 6px;
            display: inline-block;
            vertical-align: top;
            background-image: url(https://maps.gstatic.com/mapfiles/api-3/images/autocomplete-icons.png);
            -moz-background-size: 34px;
            background-size: 34px
        }

        .hdpi .pac-icon {
            background-image: url(https://maps.gstatic.com/mapfiles/api-3/images/autocomplete-icons_hdpi.png)
        }

        .pac-icon-search {
            background-position: -1px -1px
        }

        .pac-item-selected .pac-icon-search {
            background-position: -18px -1px
        }

        .pac-icon-marker {
            background-position: -1px -161px
        }

        .pac-item-selected .pac-icon-marker {
            background-position: -18px -161px
        }

        .pac-placeholder {
            color: gray
        }

        .pac-target-input:-webkit-autofill {
            -webkit-animation-name: beginBrowserAutofill;
            animation-name: beginBrowserAutofill
        }

        .pac-target-input:not(:-webkit-autofill) {
            -webkit-animation-name: endBrowserAutofill;
            animation-name: endBrowserAutofill
        }

        sentinel {}
    </style>

    <link rel="stylesheet" href="CSS/hover.min.css">
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="CSS/combined.css">

    <style>
        .darkbg1 {
            background-color: #c0c0c0;
            border-bottom-color: #be232b;

            color: #81181d;
        }

        .darkbg2 {
            background-color: ;
            border-top-color: #be232b;
            color: yellow;
        }

        .darkbg3 {
            background-color: #666666;
            border-top-color: #be232b;
            color: yellow;
        }

        .darkbg4 {
            background-color: ;
            border-top-color: #be232b;
            color: #ff0000;

        }
    </style>

    <script async="" src="JS/analytics.js"></script>
    <script src="JS/jquery-1.11.1.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="JS/utilityFunctions.js"></script>
    <script src="JS/portalBBpublic.js" type="text/javascript"></script>


    <link rel="stylesheet" href="../hisglobal/bbpublic/assets/css/jquery-ui.min.css">
    <!--   <script src="//code.jquery.com/jquery-1.10.2.js"></script> -->
    <script src="JS/jquery-ui.min.js"></script>
    <!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
    <script>
        function openInfo(evt, featureName) {
            // Declare all variables
            var i, tabcontent, tablinks;

            // Get all elements with class="tabcontent" and hide them
            tabcontent = document.getElementsByClassName("tabInfo");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            // Get all elements with class="tablinks" and remove the class "active"
            tablinks = document.getElementsByClassName("infoLink");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            // Show the current tab, and add an "active" class to the button that opened the tab
            document.getElementById(featureName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>


    <style>
        /* pricing table */
        .pricing-table {
            text-align: center;
        }

        .single-table {
            padding: 30px 20px 20px;
            border: 1px solid #f2f2f2;
        }

        .single-table h3 {
            margin-top: 0;
            padding: 0;
            font-size: 18px;
            text-transform: uppercase;
            margin-bottom: 30px;
        }

        .price {
            font-size: 36px;
            line-height: 36px;
        }

        .price span {
            font-size: 14px;
            line-height: 14px;
        }

        .single-table ul {
            list-style: none;
            padding: 0;
            margin: 30px 0;
        }

        .single-table ul li {
            line-height: 30px;
        }

        .single-table.featured {
            color: #fff;
        }

        .single-table.featured h3 {
            color: #fff;
        }

        .single-table.featured .btn.btn-primary {
            background-color: #fff;
        }

        /* pricing table */


        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        #datepicker {
            position: relative;
            z-index: 1000;
        }

        #datepicker1 {
            position: relative;
            z-index: 1000;
        }

        #map {
            height: 100%;
        }

        .controls {
            margin-top: 10px;
            border: 1px solid transparent;
            border-radius: 2px 0 0 2px;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            height: 32px;
            outline: none;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        }

        #pac-input {
            background-color: #fff;
            font-family: Roboto;
            font-size: 15px;
            font-weight: 300;
            margin-left: 12px;
            padding: 0 11px 0 13px;
            text-overflow: ellipsis;
            width: 300px;
        }

        #pac-input:focus {
            border-color: #4d90fe;
        }

        .pac-container {
            font-family: Roboto;
        }

        #type-selector {
            color: #fff;
            background-color: #4d90fe;
            padding: 5px 11px 0px 11px;
        }

        #type-selector label {
            font-family: Roboto;
            font-size: 13px;
            font-weight: 300;
        }

        .padding5 {
            padding: 5px;
        }
    </style>





    <script type="text/javascript" charset="UTF-8" src="JS/common.js"></script>
    <script type="text/javascript" charset="UTF-8" src="JS/util.js"></script>
    <script type="text/javascript" charset="UTF-8" src="JS/map.js"></script>
    <script type="text/javascript" charset="UTF-8" src="JS/controls.js"></script>
    <script type="text/javascript" charset="UTF-8" src="JS/places_impl.js"></script>
    <script type="text/javascript" charset="UTF-8" src="JS/marker.js"></script>
    <script type="text/javascript" charset="UTF-8" src="JS/geocoder.js"></script>
    <script type="text/javascript" charset="UTF-8" src="JS/onion.js"></script>
    <script type="text/javascript" charset="UTF-8" src="JS/infowindow.js"></script>

    <title>Register</title>
</head>

<body>

    <div class="containers">
        <nav class="flex">
            <a href="index.php"><img id="logoimg" src="Images/Img/Illustrated Blood Donor Hospital Logo.png" alt="logo"></a>
            <div class="logo"> Red Blood</div>
            <ul>
                <li><a style="color: white;" href="index.php">Home</a></li>
                <li><a style="color: white;" href="index.php#about-us">About US</a></li>

            </ul>
        </nav>
    </div>
<?php 

if($insert){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your note has been inserted successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'></span>
    </button>
  </div>";
  }
  ?>


    <!-- .............forms...................... -->
    <div id="form">

        <div class="container wrapper">
            <div class="page-header">




                <h3 class="text-danger">Blood Bank Details</h3>
                <!-- 			 <div align="right"> -->
                <!-- 			 <button type="button" id="back" class="btn btn-danger" onclick="window.location.href='/BLDAHIMS/bloodbank/portalUser.cnt'">BACK</button> -->
                <!-- 			 </div> -->
            </div>

            <ul class="nav nav-tabs">

                <li onclick="openInfo(event, 'bbInfo')" id="wb" class=" infoLink active"><a href="javascript:void(0)">Blood Bank Information &nbsp;<span class="badge">1</span></a></li>
                <!--   <li onclick="openInfo(event, 'miscel')" id="plt" class=" infoLink"><a href="javascript:void(0)">Miscellaneous  &nbsp; <span class="badge">3</span></a></li>
                        <li onclick="openInfo(event, 'user')" id="user1" class=" infoLink"><a href="javascript:void(0)">User Type  &nbsp; <span class="badge">4</span></a></li> -->
            </ul>




            <div class="tabInfo" id="bbInfo" style="display: block;">
                <div class="row">
                    <div class="panel-body">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <form action="./bloodbank_register.php" method="post">
                                <fieldset>
                                    <legend>Blood Bank Address</legend>
                                    <div class="row">
                                        <div class="col-sm-1">
                                            <b>State</b>
                                            <font color="red">*</font>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" name="hospState" maxlength="40" tabindex="1" value="" onkeypress="return validateAlphaOnly(event,this)" class="form-control" fdprocessedid="ine1y" required>
                                        </div>

                                        <div class="col-sm-1">
                                            <b>District</b>
                                            <font color="red">*</font>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" name="hospDistrict" maxlength="40" tabindex="1" value="" onkeypress="return validateAlphaOnly(event,this)" class="form-control" fdprocessedid="ine1y" required>

                                        </div>

                                        <div class="col-sm-1">
                                            <b>City</b>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" name="hospCity" maxlength="40" tabindex="1" value="" onkeypress="return validateAlphaOnly(event,this)" class="form-control" fdprocessedid="ine1y">

                                        </div>

                                    </div>
                                    <br>
                                </fieldset>
                                <br>

                                <fieldset>
                                    <legend>Blood Bank Details</legend>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <b>Blood Bank Name</b>
                                            <font color="red">*</font>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" name="bldbankName" maxlength="100" tabindex="1" value="" onkeypress="return validateAlphaOnlyWithDotAndSpace(event,this)" class="form-control" fdprocessedid="3hhic" required>

                                        </div>
                                        <div class="col-sm-3">
                                            <b>Parent Hospital Name</b>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" name="parentHospName" maxlength="100" tabindex="1" value="" onkeypress="return validateAlphaOnlyWithDotAndSpace(event,this)" class="form-control" fdprocessedid="4bf8gv" required>
                                        </div>


                                    </div>

                                    <br>











                                    <div class="row">
                                        <div class="col-sm-2">
                                            <b>Email</b>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="email" name="hospEmail" maxlength="40" tabindex="1" value="" class="form-control" fdprocessedid="tmq7co" required>
                                        </div>

                                        <div class="col-sm-2">
                                            <b>Contact No.</b>
                                            <font color="red">*</font>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" name="hospContact" maxlength="43" tabindex="1" value="" onkeypress="return validateNumericWithComma(event)" class="form-control" fdprocessedid="dv437s" required>
                                        </div>







                                        <br>

                                </fieldset>
                                <br>
                                <fieldset>
                                    <legend>Blood Component</legend>
                                    <div class="col-md-3">
                                        <select name="bloodGroupType" onchange="resetComponent(this.value)" class="form-control" id="bgType" style="
                                        margin: 22px 0px;
                                    " required>
                                            <option selected>Select Blood Group</option>
                                            <option value="B+">B+</option>
                                            <option value="A+">A+</option>
                                            <option value="AB+">AB+</option>
                                            <option value="B-">B-</option>
                                            <option value="O+">O+</option>
                                        </select>
                                    </div>


                                </fieldset>


                                <div class="row">

                                    <div class="col-sm-6">


                                        <div class="row">
                                            <div class="col-sm-12" align="center">

                                                <button type="submit" class="btn btn-danger">Save</button>
                                                </form>
                                                <button type="button" id="cancelButton" class="btn btn-danger" onclick="window.location.href='welcome.php'">Cancel</button>
                                                
  
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>



                </div>


            </div>
<?php 
 
 if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    
      // Update the record

        $state = $_POST["hospState"];
        $District = $_POST["hospDistrict"];
        $email = $_POST["hospEmail"];
        $Contact = $_POST["hospContact"];
        $bgroup = $_POST["bloodGroupType"];
        $name = $_POST["bldbankName"];
        $HopsNme = $_POST["parentHospName"];
    
     // Sql query to be executed
      $sql = "INSERT INTO `bloodbank_reg` (`State`,`District`, `Blood_Group`, `Email` ,`Phone`, `Address`,`Hname`,`BBname`) VALUES ('$state', '$District', 'B+', '$email', '$Contact', 'Near JMI','$HopsNme','$name')";
      if(1)
      {
          $result = mysqli_query($conn, $sql);
          $Submit=true;
          echo'<script>alert("Your data is Submitted")</script>';
      }
      

}
?>
            
</body>

</html>