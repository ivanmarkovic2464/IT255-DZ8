<?php
session_start();

include("conn.php");
if(isset($_POST['submit'])){
$k_ime = $conn->real_escape_string(trim($_POST['k_ime']));
$lozinka = $conn->real_escape_string(trim($_POST['lozinka']));
$ime = $conn->real_escape_string(trim($_POST['ime']));
$prezime = $conn->real_escape_string(trim($_POST['prezime']));
$email = $conn->real_escape_string(trim($_POST['email']));

$nova_lozinka = password_hash($lozinka, PASSWORD_DEFAULT);

if(!empty($k_ime) && !empty($lozinka) && !empty($ime) && !empty($prezime) && !empty($email)){
//global $conn;
$check_email = $conn->query("SELECT email FROM korisnici WHERE email='$email'");
$count=$check_email->num_rows;
if($count == 0)
{
$query = "INSERT INTO `korisnici`(`Korisnicko ime`, `Lozinka`, `Ime`, `Prezime`, `Email`) VALUES ('$k_ime','$lozinka','$ime','$prezime','$email')";
if($conn->query($query)){
$msg = "<div style='background-color: green; color:#fff; font-size:20px; text-align:center; padding-top:3px; height:40px;'>
                    Uspesna registracija 
                </div>";
}
}
else{
	$msg="<div style='background-color: red; color:#fff; font-size:20px; text-align:center; padding-top:3px; height:40px;'>
                    Email zauzet 
                </div>";
}
}
else{
	$msg="<div style='background-color: red; color:#fff; font-size:20px; text-align:center; padding-top:3px; height:40px;'>
                    Morate popuniti sva polja
                </div>";
}
$conn->close();
}

?>

<!DOCTYPE html>
<html lang="en-gb" class="no-js">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>MetHotels</title>
<meta name="description" content="">
<meta name="author" content="Ivan Markovic">

<link rel="stylesheet" href="css/bootstrap.min.css" />
<link href="css/animate.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="css/styles.css" />
<link href="font/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
<header class="header">
  <div class="container">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
       <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> 
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span> 
		<span class="icon-bar"></span> 
		<span class="icon-bar"></span>
	   </button>
        <a href="#" class="navbar-brand scroll-top logo animated bounceInLeft"><b><i>MetHotels</i></b></a> 
      </div>
      <div id="main-nav" class="collapse navbar-collapse">
        <ul class="nav navbar-nav" id="mainNav">
          <li><a href="" class="scroll-link">Strana 1</a></li>
          <li><a href="" class="scroll-link">Strana 2</a></li>
          <li><a href="" class="scroll-link">Strana 3</a></li>
          <li><a href="login.php" class="scroll-link">Login</a></li>

        </ul>
      </div>
    </nav>
  </div>
</header>

<div id="#top"></div>
<section id="home">
  <div class="banner-container"> 
        <div>
            <img src="img/1.jpg"/>
        </div>
  </div>
  
</section>
<?php
		if(isset($msg)){
		echo $msg;
		}
  ?>

<section>
    <div clas="container">
        <div class="row">
            &nbsp;
        </div>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2" >
                <form action="register.php" method="POST" role="form">
                    <div class="form-group">
                        <legend>Registracija korisnika</legend>
                        <label for="">Korisničko ime</label>
                        <input name="k_ime" type="text" class="form-control" id="" placeholder="Unesite korisničko ime">
                        <label for="">Lozinka</label>
                        <input name="lozinka" type="password" class="form-control" id="" placeholder="Unesite lozinku">
                        <label for="">Ime</label>
                        <input name="ime" type="text" class="form-control" id="" placeholder="Unesite vase ime ovde">
                        <label for="">Prezime</label>
                        <input name="prezime" type="text" class="form-control" id="" placeholder="Unesite vase Prezime ovde">
                        <label for="">Email</label>
                        <input name="email" type="text" class="form-control" id="" placeholder="Unesite vas email ovde">
						<br>
                        <button name="submit" type="submit" class="btn btn-primary">Potvrdi</button>
                    </div>	
				</form>
            </div>
        </div>
    </div>
</section>
 

<a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a>
<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.min.js" type="text/javascript"></script> 
</body>

<footer>
<section class="copyright">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center"> Copyright 2016 <a href="http://www.metropolitan.edu.rs/">Metropolitan Belgrade</a> </div>
    </div>
    
  </div>
</section>
</footer>

</html>
