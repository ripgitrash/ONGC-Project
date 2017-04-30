<html>
<head>
<title>ONGC::</title>
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
<script src="js/materialize.js"></script>
<script src="js/bootstrap.js"></script>
<link rel="stylesheet" href="css/materialize.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap.css">
 
</head>
<body>
<?php    
session_start();
 $con=mysqli_connect("localhost", "root", "admin", "ongc");
 if(isset($_POST["log"])){
           $uid=$_POST["uid"];
            $pswrd=$_POST["pass"];
             $a=mysqli_query($con,"select Name from reg where Userid='$uid' and pswrd='$pswrd'");
             $row=mysqli_fetch_row($a);
          if($row)
          { 
            $_SESSION['username']=$row[0]; 
            echo'<body>
<header class="row grey lighten-4 z-depth-1">

	<!-- login & logout -->
	<div class="z-depth-1">
	<div class="row red darken-4">
		<div class="col right m8 l8">
		<table class="hide-on-small-only">
                <tr>
                <td style="color:lightblue;font-size:22px">Welcome'.' '.$_SESSION['username'].'</td>
			   	<td><button class="waves-effect waves-light red-text darken-4 btn-small" type="submit" name="Register"><i class="material-icons-right"><a href="logout.php">Logout</a></i></button></td>
			   	</tr>
			   </table> </div>
			   <div class="col left s2 m2">
			   <div class="hide-on-large-only">
			 <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
			  <ul class="side-nav transparent" id="mobile-demo">
				<li class="col tab"><a class="active" href="#">Home</a></li>
				<li class="col tab"><a href="#">About Us</a></li>
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
			<p class="small grey-text text-darken-1">A central public Enterprise under the Government of India</p>	
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
				<li class="col tab"><a class="active" href="#">Home</a></li>
				<li class="col tab"><a href="about_us.html">About Us</a></li>
			</ul></div>
		</div>
	
</header>
<!-- main -->
<main>
	
		<div class="row card-panel grey lighten-4">
			<div class="row">
				<div class="col s1 m2 l2">
					<a href="http://www.ongcindia.com/wps/wcm/connect/ongcindia/home"><img style="padding-left:20px;" width="77" height="76" src="images/logo.jpg" alt="ONGC_logo"></a>
				</div>
				<div class="push-s2 col center s8 m8 l8">
					<h6><b>OIL AND NATURAL GAS CORPORATION LTD</b></h6>
  		            <h6>Register for Students Training</h6>
  		            <h6>(Summer/Winter/MCA Training)</h6>
				</div>

				<!-- Attach picture -->
				<div class="col s2 m2 l2 z-depth-1">
					
				</div>


			</div>
                    <div>
			<div class="row card-panel">
			<div class="row">
				<div class="col s4 m4 l4">
                                    
					<p style="color:blue">Sorry The Deadline For the Application is Over</p>
	</div>
                        </div>
                        </div>
                    </div>
                    
                        </div>
                        </div>
                    </div>
                    
                
</main>
	
	<!-- footer -->
	<footer class="page-footer card-panel red darken-4 text-white"> 
	<section>
<div class="row offset-12">
<section class="col">
	<ul>
		<li>Last date of submission is:<p id="da"></p></li>
	
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
                document.getElementById("da").innerHTML=d;
            
                var d1=new Date();
                if(d1.getMonth()<d.getMonth())
                 window.location.href = \'http://localhost/Ongc/active.php\';
                else if(d1.getMonth()=d.getMonth() && d1.getDate()<d.getDate())
                     window.location.href = \'http://localhost/Ongc/active.php\';
                     else
                     window.location.href = \'http://localhost/Ongc/expired.php\';
                </script>
	</footer>
	<!-- links -->

</body>
          ';}
            
    



          else
          {
              echo "
                 <script type=\"text/javascript\"> 
                 alert(\"Invalid User\");
                   window.location.href = 'http://localhost/Ongc/register.html';
                 </script>
                  ";
          }
 }
else if(isset($_POST["forg"])){
    
}

          mysqli_close($con);
          
?>            
</body>
</html>

