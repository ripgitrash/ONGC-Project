<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ONGC::</title>
</head>
<body>
<header class="row grey lighten-4 z-depth-1">

	<!-- login & logout -->
	<div class="z-depth-1">
	<div class="row red darken-4">
            <form method="POST" action="login.php">
		<div class="col right m10 l10">
		<table class="hide-on-small-only">
                    
			   </table> </div>
            </form>
			   <div class="col left s2 m2">
			   <div class="hide-on-large-only">
			 <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
			  <ul class="side-nav transparent" id="mobile-demo">
				<li class="col tab"><a class="active" href="#">Home</a></li>
				<li class="col tab"><a class="active" href="#">Guides Login</a></li>
				<li class="col tab"><a href="#">Section2</a></li>
				<li class="col tab"><a href="#">Section3</a></li>
			</ul>	
			</div>
			   </div>
	</div>
    </div>
<br>
<!-- logo -->
<div class="row" >
	<div class="col m2 l1 s1 ">
		<a href="http://www.ongcindia.com/wps/wcm/connect/ongcindia/home"><img style="padding-left:20px;" width="77" height="76" src="images/logo.jpg" alt="ONGC_logo"></a>
	</div> <br>
		<div class="hide-on-med-and-down col l10">
			<div style="padding-left:1em;" class="push-s6 logo-title"><b><a href="http://www.ongcindia.com/wps/wcm/connect/ongcindia/home" class="red-text text-darken-4"  style="font-size:36px;"">Oil and Natural Gas Corporation Limited</a></b>
			<p class="small grey-text text-darken-1">A central Enterprise of the Government of India</p>	
		</div></div>
	<div class="hide-on-large-only hide-on-small-only col m10 s10" style="padding-left:0.3em;">
		<div>
			<div style="font-size:2.3em;" class="push-s2  logo-title"><a class="red-text text-darken-4" href="http://www.ongcindia.com/wps/wcm/connect/ongcindia/home"><b>Oil and Natural Gas Corporation Limited</b></a></div>
			<p class="small grey-text text-darken-1">A central public Enterprise under the Government of India</p>	
		</div>
	</div>			
	<div class="hide-on-large-only hide-on-med-only col m10 s10" style="padding-left:4.3em;">
		<div>
			<div style="font-size:1.6em;" class="push-s2  logo-title"><a class="red-text text-darken-4" href="http://www.ongcindia.com/wps/wcm/connect/ongcindia/home"><b>Oil and Natural Gas Corporation Limited</b></a></div>
			<p class="small grey-text text-darken-1">A central public Enterprise under the Government of India</p>	
		</div>
	</div>			
</div>


			<!-- menu -->

			<div class="row nav-wrapper hide-on-med-and-down">
			<div class="col l8 m8 right">
				<ul class="tabs transparent">
				<li class="col tab"><a class="active" href="home.html">Home</a></li>
				
        <li class="col tab"><a href="our_internships 2.html">Internship Program</a></li>
			</ul></div>
                            
      <div class="col left-align s6 m4 l4">
            <ul style="padding-left:2em;" class="red-text text-darken-4">
            <li class="small">Last date of submission is:<p id="da"></p></li>
  
            </ul>
      </div>
		</div>
	
</header>
<!-- main -->
<main>
<?php
session_start();
$_SESSION["username"]="admin";
?>
		<div class="row card-panel grey lighten-4">
			<div class="row">
				<div class="col s1 m2 l2">
					<a href="http://www.ongcindia.com/wps/wcm/connect/ongcindia/home"><img style="padding-left:20px;" width="77" height="76" src="images/logo.jpg" alt="ONGC_logo"></a>
				</div>
				<div class="push-s2 col center s8 m8 l8">
					<h6><b>OIL AND NATURAL GAS CORPORATION LTD</b></h6>
  		            <h6>Register for Student's Training</h6>
  		            <h6>(Summer/Winter/MCA Training)</h6>
				</div>
                           
                                <form method="POST" action="report1.php">         
			
                         
				<div class="col s4 m4 l3">
                                    <Label><b>What Branch Do You Mentor:</b></Label>
				</div>
                            
                         
                            <div class="col s2 m2 l0"><input type="text" name="query" ></div>
                            
			<!--end-->
                        
                             <div class="row">
                                    <div class="col s8 m8 l8 center">
                                        
                                    <input type="submit" name="gr" value="Download List">  
     
                                <input type="submit" name="ns" value="Shortlist Students">
                                 <button type="submit" name="Register"><a href="logout.php">Logout</a></button>
                             </div>
                             </div>
                           
                             </div>
                            </form>
                            
</main>
	
	<!-- footer -->
	<footer class="page-footer card-panel red darken-4 text-white"> 
	<section>
<div class="row offset-12">
<section class="col">
	<ul>
		<li>Updated On:<p id="da1"></p></li>
	
	</ul>
</section>
</div>
	</section>
		<section class="footer-copyright red darken-1"><div class="container white-text text-darken-5">
			@Copyright Oil and Natural Gas Corporation Ltd.
		<p>Updated: 10 June 2016</p>
		</div></section>
	<script>
                var d=new Date(2016,07,30);
                var d1=new Date();
                document.getElementById("da").innerHTML=d;
                document.getElementById("da1").innerHTML=d1;
                </script>
	</footer>
	<!-- links -->
<script src="js/materialize.js"></script>
<script src="js/bootstrap.js"></script>
<link rel="stylesheet" href="css/materialize.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap.css">
</body>
</html>
