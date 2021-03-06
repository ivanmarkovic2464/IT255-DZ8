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
          <li><a href="" class="scroll-link">Strana 4</a></li>
		  <li><a href="register.php" class="scroll-link">Registracija</a></li>
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

<section>
    <div class="container">
	
        <div class="row">
            &nbsp;
        </div>
		
        <div class="row">
            <div class="col-sm-3" style="background-color: hsla(349, 94%, 34%, 0.96); color: #fff;"  >
               
                <div class="row">
                 
                    <div class="cols-md-12">
                       
                        <div class="form-group">
                            
                             <font size = '6em'><i><b>Rezervacija:</b></i></font>
                           
								<form action="action_page.php">
								    </br>
									
									Datum dolaska:
									<input type="date" style="background-color: hsla(35, 8%, 14%, 1);
									color: #fff; border: 2px solid #000;">
									<div style="height:10px;"></div>
									
									Datum odlaska:
									<input type="date" style="background-color: hsla(35, 8%, 14%, 0.96);
									color: #fff; border: 2px solid #000;">
									
								</form>
								&nbsp;
							<div>
								<label for="No_rooms">Broj soba</label>
								<select class="form-group" name="No_rooms" id="No_rooms" style="background-color: hsla(0, 8%, 14%, 0.96); color: #fff;">
									<option value="1" selected="selected">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
								</select>
								
								<label for="No_plp">Broj odraslih osoba</label>
								<select class="form-group" name="No_plp" id="No_plp" style="background-color: hsla(0, 8%, 14%, 0.96); color: #fff;">
									<option value="1" selected="selected">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
								</select>
								
								<label for="No_kids">Broj dece</label>
								<select class="form-group" name="No_kids" id="No_kids" style="background-color: hsla(0, 8%, 14%, 0.96); color: #fff;">
									<option value="0" selected="selected">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
								</select>
								
								<label for="Type_rooms">Tip sobe</label>
								<select class="form-group" name="Type_rooms" id="Type_rooms" style="background-color: hsla(0, 8%, 14%, 0.96); color:#fff;">
									<option value="1" selected="selected">jednokrevetna</option>
									<option value="2">dvokrevetna</option>
									<option value="3">trokrevetna</option>
									<option value="4">četvorokrevetna</option>
								</select>
															
							</div>
						</div>
					</div>
								<hr/>
					<div class="row">
						<div class="cols-md-12">
							<div class="form-group">
								&nbsp;
								<font size = '6'>Obroci:</font>

								<div class="checkbox">                           
									<label><input type="checkbox" value="">Bez obroka</label>
								</div>		
								<div class="checkbox">
									<label><input type="checkbox" value="">Uključen doručak</label>
								</div>
								<div class="checkbox">
									<label><input type="checkbox" value="">Polu pansion</label>
								</div>
								<div class="checkbox">
									<label><input type="checkbox" value="">Pun pansion</label>
								</div>
								<div class="checkbox">
									<label><input type="checkbox" value="">All-inclusive</label>
								</div>
                            
							</div>
                    
                    </div>
               
                </div>
               
			   <hr/>
                
                    <div class="row">
                 
                    <div class="cols-sm-12">
                       
                    <div class="form-group">
                            &nbsp;
                             <font size = '6'>Tip kreveta:</font>
                            
                        <div class="checkbox">
                            <label><input type="checkbox" value="">Francuski ležaj</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="">Odvojeni kreveti</label>
                        </div> 
                        <div class="checkbox">
                            <label><input type="checkbox" value="">Kreveti na sprat</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="">Spojeni kreveti</label>
                        </div>
					</div>
                    
                    </div>
				</div>
				
	   <hr/>
                
                 <div class="row">
                 
                    <div class="cols-sm-12">
                       
                    <div class="form-group">
                            &nbsp;
                        <font size = '6'>Dodaci u sobi:</font>
                            
                        <div class="checkbox">
                            <label><input type="checkbox" value="">Klima uređaj</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="">LCD televizor</label>
                        </div> 
						<div class="checkbox">
                            <label><input type="checkbox" value="">Frižider</label>
                        </div> 
                        <div class="checkbox">
                            <label><input type="checkbox" value="">Sa kuhinjom</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="">Sa pogledom</label>
                        </div>  
						  
					</div>
                    
                    </div>
              
                </div>
                     
            <hr/>
               
                     
                 <div class = "row">
                        <div class = "col-sm-10 col-sm-offset-1">       
                      <button type="submit" class="btn btn-warning btn-lg btn-block">Rezerviši</button>
                            &nbsp;
                            </div>
                      </div>      
                     
                
            </div>
		</div>
            			
			<div class="col-sm-9">
			
                <div class="jumbotron" style="background-color:hsla(349, 94%, 34%, 0.20); color:hsla(360, 100%, 36%, 1);">
				
				    <div class="row">
                        <div class="col-sm-4">
                            <img src="img/spa&relax.jpg" class="img-circle" alt="Cinque Terre" width="304" height="236">
                        </div>
                        <div class="col-sm-8">
                            <h2>
                                Ponuda 1
                            </h2>
                            <p>
                                bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla
                                bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla
								bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla
								bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <button type="button" class="btn btn-warning btn-lg">Detaljnije i rezervacija</button>
                        </div>
                    </div>
                </div>
				 <div class="jumbotron" style="background-color:hsla(349, 94%, 34%, 0.20); color:hsla(360, 100%, 36%, 1);">
				
				    <div class="row">
                        <div class="col-sm-4">
                            <img src="img/sport.jpg" class="img-circle" alt="Cinque Terre" width="304" height="236">
                        </div>
                        <div class="col-sm-8">
                            <h2>
                                Ponuda 2
                            </h2>
                            <p>
                                bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla
                                bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla
								bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla
								bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla
								</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <button type="button" class="btn btn-warning btn-lg">Detaljnije i rezervacija</button>
                        </div>
                    </div>
                </div>
                <div class="jumbotron" style="background-color:hsla(343, 94%, 34%, 0.20); color:hsla(360, 100%, 36%, 1);">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="img/family.jpg" class="img-circle" alt="Cinque Terre" width="304" height="236">
                        </div>
                        <div class="col-md-8">
                            <h2>
                                Ponuda 3
                            </h2>
                            <p>
                                bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla
                                bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla
								bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla
								bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla
								</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <button type="button" class="btn btn-warning btn-lg">Detaljnije i rezervacija</button>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>    
    </div>
</div>
         <div class="row">
            &nbsp;
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
