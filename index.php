<?php
    error_reporting(0);
    require_once 'utils.php';
    if(isset($_SESSION['profName']))
    {
        $pro = $_SESSION['profName'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>branzpir</title>
    <link rel='branzpir icon' href='branzpir_favicon.png' type='image/x-icon'>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<style>
    body,h1,h2,h3,h4 {font-family: "Poppins", san-serif}
    h5 {text-align:center; font-family: "Poppins", san-serif}
    body {font-size:16px;}
    .w3-half img{margin-bottom:-6px;margin-top:16px;opactiy:0.8;cursor:pointer}
    .w3-half img:hover{opacity:0.8}
    h1,h2{color:#a6001a;}
    /*CHECK IF SCREEN IS LESS THAN 992 PIXELS FOR SMALL SCREENS*/ 
    /*.smallSearch @media all and (max-width:992px){input[type=text]{width:250px;position:absolute;left:210px;top:5px;box-sizing:border-box;border:2px solid #ccc;border-radius:5px;font: size 12px;
    background-color:white;background-position:10px 10px;background-repeat:no-repeat;padding:5px 10px 12px 30px;
    -webkit-transition: width:0.4s ease-in-out;}}
    input[type=text]:focus{width:50%}

    /*CHECK IF SCREEN IS LESS THAN 601 PIXELS FOR LARGER SCREENS
    @media all and (max-width:601px){input[type=text]{width:250px;position:absolute;left:200px;top:5px;box-sizing:border-box;border:2px solid #ccc;border-radius:5px;font: size 12px;
    background-color:white;background-position:10px 10px;background-repeat:no-repeat;padding:5px 10px 12px 30px;
    -webkit-transition: width:0.4s ease-in-out;}}
    input[type=text]:focus{width:50%}*/

    .logIn{float:right; margin-top:-5px; border-radius:20px; margin-right:5px; border:none; color:black; background-color:white;}
    .profReg{float:right; margin-top:-5px; border-radius:20px; margin-right:5px; border:none; color:black; background-color:white;}
    .brandReg{float:right; margin-top:-5px; border-radius:20px; border:none; color:black; background-color:white;}
    .searchBar{width:300px; margin-top:-20px; color:#bfbfbf; background-color:white; text-align:left; border-radius:15px;}
    .nextRound{background-color:red; color:white; border-radius:50%; margin-left:-42px; font-size:10px; padding: 8px 16px;}
    .lft{margin-left:80px; padding-top:-50px; font-size:13px; text-align:left;}
    .nlog{width:3%;float:right; margin-top:-5px; cursor:pointer;}
    .nprof{width:3%;float:right;margin-top:-5px;;cursor:pointer;}
    .nbrand{width:3%; float:right; margin-top:-5px; cursor:pointer;}
    .nbrandMenu{float:right;margin-top:-10px}
    .mainImg{width:100%}
    .content{
        position:relative;
    }
    .pros-content {
        position:absolute;
        float:right;margin-right:5px;
    }

    /* Dropdown Button */
	.dropbtn {
	  background-color: white;
	  color: white;
	  font-size: 16px;
	  border: none;
	}
    @media all and (min-width:992px){
    .dropdown-menu-sw {
        left:75%;
    }
    .dropdown-menu {
        position:absolute;
        top:30px;
        right:10;
        width:160px;
    }}
    @media all and (max-width:992px){
    .dropdown-menu-sw {
        left:60%;
    }
    .dropdown-menu {
        position:absolute;
        top:100px;
        right:10;
        width:160px;

    }}
    @media all and (min-width:992px){
    .dropdown-menu-uw {
        left:65%;
    }
    .dropdown-menu {
        position:absolute;
        top:30px;
        right:10;
        width:160px;
    }}
    @media all and (max-width:992px){
    .dropdown-menu-uw {
        /*right: -10;*/
        left:50%;
    }
    .dropdown-menu {
        position:absolute;
        right:10;
        top:15px;
        width:160px;

    }}

</style>
<body>
<nav class="w3-sidebar w3-highway-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
    <div class="w3-container">
        <h3 class="w3-padding-64"><b><br>branzpir</b></h3>
    </div>

    <div class="w3-bar-block">
        <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a>
        <a href='showcase.php' onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Showcase</a>
        <a href='findProfessionals.php' onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Find Providers</a> 
        <a href='contact.php' onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact</a>
        <a href='youandbranzpir.html' onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">You and Branzpir</a>
    </div>
</nav>

<!--- TOP MENU ON SMALL SCREENS -->
<header class="w3-container w3-top w3-hide-large w3-highway-red w3-xlarge w3-padding">
    <a href="javascript:void(0)" class="w3-button w3-highway-red w3-margin-right" onclick="w3_open()">☰</a>
</header>

<!--- OVERLAY EFFECT WHEN OPENING SIDEBAR ON SMALL SCREENS -->
<div class="w3-overlay w3-hide-small" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!--- PAGE CONTENT -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">
    <div class="w3-container" style="margin-top:80px" id="showcase">
    <form method='POST' action=''><input class='brandReg' type='button' value='BRANDS'/></form>
        <div class="dropdown">
            <a href="#" id="imageDropdown" data-toggle="dropdown">
            <img class="nbrand" src="brands.png">
            </a>
            <div class="dropdown-menu pull-right my-2">
                <li><a href="login.php">Log In</a></li>
                <li><a href="registration.php">Join As a Brand</a></li>
                <?php if(isset($_SESSION['brandID'])) : ?>
                <li><a href="logout.php">Log Out</a></li>
                <?php endif ?>
            </div>
        </div>
        <form method='POST' action=''><input class='profReg' type='button' value='PROVIDERS'/></form>
        <div class="dropdown">
            <a href="#" id="imageDropdown" data-toggle="dropdown">
            <img class="nprof" src="pros.png">
            </a>
            <div class="dropdown-menu dropdown-menu-sw">
                <li><a href="professionalsLogin.php">Log In</a></li>
                <li><a href="professionalsRegistration.php">Join As a Provider</a></li>
                <?php if(isset($_SESSION['profID'])) : ?>
				<li><a href="logout.php">Log Out</a></li>
                <li><?php echo "<a href='newUserProfile?category=$pro'>Edit Profile</a>"?></li>
                <?php endif ?>
            </div>
        </div>
        <form method='POST' action=''><input class='logIn' type='button' value='USERS'/></form>
        <div class="dropdown">
            <a href="#" id="imageDropdown" data-toggle="dropdown">
            <img class="nlog" src="users.png">
            </a>
            <div class="dropdown-menu dropdown-menu-uw">
                <li><a href="login.php">Log In</a></li>
                <li><a href="registration.php">Register</a></li>
                <?php if(isset($_SESSION['userID'])) : ?>
                <li><a href="logout.php">Log Out</a></li>
                <?php endif ?>
            </div>
        </div>
        <img src='branzpir logo idea 3 with text (002).png' style='width:25%; cursor:pointer' onclick="window.location.href='index.php';">
        <div class="fixer-container input-group" >
            <form method='POST' action='showcase.php?search=<?php echo $_POST['search']?>'>
                <!--input class='searchBar' type="text" name="search" placeholder="SEARCH FOR INSPIRATION..." /><button><button-->
                <div class="input-group">
                    <input class="search form-control rounded" type="text" name="search" placeholder="Search" />
                    <input class="submit btn btn-outline-danger" name="submit" type="submit" value="Search"/>  
                </div>
            </form>
        </div>
    </div>

    <?php if(isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == true) : ?>
    <br><div class="alert alert-success">
        <strong>Success!</strong> You are logged in!
    </div>
    <?php endif ?>

    <div class="w3-row-padding">
        <img src="uploads/index.png" class="mainImg" style="padding-top:15px">
    </div>

    <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
        <span class="w3-button w3-black w3-xxlarge w3-display-topright">x</span>
        <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
            <img id="img01" class="w3-image">
            <p id="caption"></p>    
        </div>
    </div>

    <div class="w3-container" id="services" style="margin-top:75px">
        <h1 class="w3-xxxlarge"><b>Welcome To Branzpir</b></h1>
        <hr style="width:50px;border:5px solid #a6001a" class="w3-round">
        <p>Branzpir is your connection to brand enpowerment.</p>
        <p>Search for photos, inspiration and professionals. Refine by application, styles or size to find ideas which suit your project.</p>
        <p>Our Catalogue of professionals includes design agencies, architecture firms, construction companies, signage businesses - all Australia-based.</p>
        <p>Have instant access to inspirational ideas through input of your own search term.</p>
        <p>Register and you will have an even more comprehensive list of provider and manufacturer details.</p>
    </div>

    <div class="w3-row" style="margin-top:75px">
        <h1 class="w3-xxxlarge"><b>Browse For Inspiration</b></h1>
        <hr style="width:50px;border:5px solid #a6001a" class="w3-round">
            <div class="w3-container w3-quarter">
                <img src="uploads/pexels-tim-mossholder-942317.jpg" style="width:100%;height:230px;object-fit:cover">
                <a href="indoors.php" style="text-decoration:none"><h2><b>Indoors</b></h2></a>
            </div>
            <div class="w3-container w3-quarter">
                <img src="uploads/np_Old hotel sign, Seattle, Washington_4OdjLb_full.jpg" style="width:100%;height:230px;object-fit:cover">
                <a href="building.php" style="text-decoration:none"><h2><b>Building</b></h2></a>
            </div>
            <div class="w3-container w3-quarter">
                <img src="uploads/pexels-vlad-alexandru-popa-1486222.jpg" style="width:100%;height:230px;object-fit:cover">
                <a href="outdoors.php" style="text-decoration:none"><h2><b>Outdoors</b></h2></a>
            </div>
            <div class="w3-container w3-quarter">
                <img src="uploads/pexels-karol-d-331788.jpg" style="width:100%;height:230px;object-fit:cover">
                <a href="digital.php" style="text-decoration:none"><h2><b>Digital</b></h2></a>
            </div>
    </div>
<div class="w3-container w3-padding-32" style="margin-top:75px;padding-right:18px; width:100%; margin-left:0px;">
<span class="w3-left">&copy; Copyright 2022 Branzpir</span><span class="w3-right">Powered by <a href="https://eurotechdisplays.com.au/" title="Eurotech" target="_blank" class="w3-hover-opacity" style='color: #000000;'>Eurotech</a></span>
</div>
</div>
<script src='index.js'></script>
</body>
</html>
