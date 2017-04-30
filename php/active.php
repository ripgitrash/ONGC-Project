<html>
<head>
<title>ONGC::</title>
 <style type="text/css">.thumb-image{float:left;width:100px;position:relative;padding:5px;}</style>
<script src="js/materialize.js"></script>
<script src="js/bootstrap.js"></script>
<link rel="stylesheet" href="css/materialize.css">
<link rel="stylesheet" href="css/style.css">
 <script type="text/javascript" src="js/js1.js"></script>            
<script src="js/materialize.min.js"></script> 

<script>
     $(document).ready(function() {
    $('select').material_select();
  });
  
$(document).ready(function() {
        $("#fileUpload").on('change', function() {
          var countFiles = $(this)[0].files.length;
          var imgPath = $(this)[0].value;
          var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
          var image_holder = $("#image-holder");
          image_holder.empty();
          if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
            if (typeof(FileReader) != "undefined") {
              for (var i = 0; i < countFiles; i++) 
              {
                var reader = new FileReader();
                reader.onload = function(e) {
                  $("<img />", {
                    "src": e.target.result,
                    "class": "thumb-image"
                  }).appendTo(image_holder);
                }
                image_holder.show();
                reader.readAsDataURL($(this)[0].files[i]);
              }
            } else {
              alert("This browser does not support FileReader.");
            }
          } else {
            alert("Pls select only images");
          }
        });
      });
      function toggle1() {
var element = document.getElementById("1");
element.classList.toggle('show');
    }
    function validate(){
    var flag=-1;
    var mo=/\d{10}/;
    var m=document.fm.mob.value;
    var m1=document.fm.mobi.value;
     if(document.getElementById("stauth").checked==true){
         if(document.fm.des.value==""){
             alert("Enter the Designation");
             flag=0;
         }
          if(document.fm.sec.value==""){
             alert("Enter the Section");
             flag=0;
         }
          if(document.fm.loc.value==""){
             alert("Enter the Location");
             flag=0;
         }
          if(document.fm.cpf.value==""){
             alert("Enter the CPF");
             flag=0;
         }
         if(mo.test(m1)==false)
    {
        alert("Enter a correct Mobile No11.");
        flag=0;
        document.getElementById("staut").checked=false;
    }
     }
    if(mo.test(m)==false)
    {
        alert("Enter a correct Mobile No.");
        flag=0;
        document.getElementById("staut").checked=false;
    }
    
    if(document.getElementById("st_auth").checked==false)
    {
        flag=0;
        alert("Accept the Student Declaration");
        document.getElementById("staut").checked=false;
    }
    
    if(document.getElementById("p_auth").checked==false)
    {
        flag=0;
        alert("Accept the Parent Declaration");
        document.getElementById("staut").checked=false;
    }
    if(flag==-1)
     document.getElementById("subb").hidden=false;
    }
    </script>
</head>
<body>
<?php    
session_start();
          if(isset($_SESSION['username']))
          { 
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
        <li class="col tab"><a href="admin.php">For Guides</a></li>
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
	
		<div class="row card-panel grey lighten-4">
			<div class="row">
				<div class="col s1 m2 l2">
					<a href="http://www.ongcindia.com/wps/wcm/connect/ongcindia/home"><img style="padding-left:20px;" width="77" height="76" src="images/logo.jpg" alt="ONGC_logo"></a>
				</div>
				<div class="push-s2 col center s8 m8 l8">
					<h6><b>OIL AND NATURAL GAS CORPORATION LTD</b></h6>
  		            <h6>Application for Student\'s Training</h6>
  		            <h6>(Summer/Winter/MCA Training)</h6>
				</div>

				<!-- Attach picture -->
				<div class="col s2 m2 l2 z-depth-1">
					
				</div>


			</div>
                        <form method="POST" name="fm" action="main.php">
			<div class="row card-panel">
				<div class="col s4 m4 l3">
					<Label>Name</Label>
				</div>
				<div class="col s8 m8 l8"><input type="text" name="nm1" required></div>

				<div class="row">
					<div class="col s3 m3 l3">
                    <Label>Date of Birth</Label>
				</div>
				<div class="col s6 m3 l3"><input type="date" name="dob" value="ddmmyy" required></div>

				<!-- gender -->
				<div class="col s12 m5 l5"><label for="gender">Gender</label>
				<input class="with-gap" type="radio" name="gender" value="f"/><label for="f">Female</label>
				<input class="with-gap" type="radio" name="gender" value="m"/><label for="m">Male</label></div></div>
            
                <!-- category -->
                <div class="row">
                	<div class="col s12 m3 l3">
                		<label for="category">Category</label>
                	</div>
               <input type="radio" name="category" value="gen"/><label for="gen">General</label>
               <input type="radio" name="category" value="sc"/><label for="sc">SC</label>
               <input type="radio" name="category" value="st"/><label for="st">ST</label>
               <input type="radio" name="category" value="obc"/><label for="obc">OBC</label>
               <input type="radio" name="category" value="other"/><label for="other">Other</label>
                </div>
			

			<div class="row">
				<div class="col s4 m4 l3">
					<Label class="validate" >Address</Label>
				</div>
				<div class="col s8 m8 l8"><input type="text" name="add" required></div>
			</div>
                        
			<div class="row">
				<div class="col s4 m4 l3">
					<Label class="validate">Email</Label>
				</div>
				<div class="col s8 m8 l8"><input type="email" name="emla" required></div>
			</div>
		    
		    <div class="row">
				<div class="col s4 m4 l3">
					<Label class="validate">Mobile</Label>
				</div>
				<div class="col s8 m8 l8"><input type="number" name="mob" required></div>
			</div>

		    <div class="row">
				<div class="col s4 m4 l3">
					<Label class="validate">Father\'s/Mother\'s Name</Label>
				</div>
				<div class="col s8 m8 l8"><input type="text" name="pname" required></div>
			</div>
		   
		    <div class="row">
				<div class="col s4 m4 l3">
					<Label class="validate">Father\'s/Mother\'s Occupation</Label>
				</div>
				<div class="col s8 m8 l8"><input type="text" name="pocc" required></div>
			</div>
		    <br>
<div class="row">
            	<div class="col">
            		<p>
            		<input type="checkbox" id="stauth" name="ck" onclick="toggle1()"/>
	                <label for="stauth"><b>If employee of ONGC:</b></label></p>
	                </div>
	            </div>
<div id="1" class="mine">

		    <div class="row">
				<div class="col s2 m2 l2">
					<Label >Designation</Label>
				</div>
				<div class="col s4 l3 m4"><input type="text" name="des"></div>
			
				<div class="col s2 m2 l2">
					<Label name="cpf">CPF</Label>
				</div>
				<div class="col s4 l3 m4"><input type="number" name="cpf"></div>
			</div>
			 <div class="row">
				<div class="col s2 m2 l2">
					<Label >Section</Label>
				</div>
				<div class="col s4 l3 m4"><input type="text" name="sec"></div>
			
				<div class="col s2 m2 l2">
					<Label >Location</Label>
				</div>
				<div class="col s4 l3 m4"><input type="text" name="loc"></div>
			</div>
			 <div class="row">
				<div class="col s2 m2 l2">
					<Label>Phone/Mobile No</Label>
				</div>
				<div class="col s4 l3 m4"><input type="number" name="mobi"></div>
			</div>
		   
</div>
		    <div class="row">
				<div class="col card-title">
				<h6><b>Academic Details:</b></h6>
				</div>
			</div>
		    
		    <div class="row">
				<div class="col s4 m4 l3">
					<Label >Name of the present Institute</Label>
				</div>
				<div class="col s8 l8 m8"><input type="text" name="pins" required></div>
			</div>
		   
		    <div class="row">
				<div class="col s4 m4 l3">
					<Label>Name of present course</Label>
				</div>
    <div class="input-field col s12">
    <select>
      <option value="" disabled name="sl" selected>Choose your option</option>
      <option value="cse" name="sl">BE/BTech-CSE</option>
      <option value="ite" name="sl">BE/BTech-IT</option>
      <option value="ece" name="sl">BE/BTech-ECE</option>
      <option value="civil" name="sl">BE/BTech-Civil</option>
      <option value="chem" name="sl">BE/BTech-Chemical</option>
    </select><br>
  </div>
			
			<div class="row">
				<div class="col s4 m4 l3">
					<Label>Present/Semester/Year</Label>
				</div>
				<div class="col s8 l8 m8"><input type="text" name="psem" required></div>
			</div>

			<div class="row">
				<div class="col s4 m4 l3">
					<Label>Last Semester % age</Label>
				</div>
				<div class="col s2 m2 l2"><input type="number" name="lsperc" required></div>
				<div class="col s4 m4 l3">
					<Label name="p_course">% age in 10+2</Label>
				</div>
				<div class="col s2 m2 l2"><input type="number" name="tenperc" required></div>
			</div>

			<!-- student authorisation -->
            <div class="row">
            	<div class="col">
            		<p>
            		<input type="checkbox" id="st_auth"/>
	                <label for="st_auth">I son/daughter of parents name request the I/c Nodal agency for granting me the permission to undertake student\'s training at ONGC. I have not undergone any student\'s training in ONGC, of similar type, before.</label></p>
	                </div>
	            </div>

            <!-- parent authorisation -->
        <div class="row">
            <div class="col">
            	 <p>
                <input type="checkbox" id="p_auth"/>
            	<label for="p_auth">
            		I shall be responsible for the applicant\'s conduct and discpilne during the student\'s training at ONGC.
            	</label></p>
            </div>
        </div>

        <!-- attach signatures -->
        <div class="row">
    	<div class="col"><p>Attach Applicant and Parent\'s Signature\'s:</p></div>
        <div class="col s6 m3 l3"><input type="file" id="fileUpload" multiple required></div>
        <div id="image-holder"></div>
</div>
        <div class="row">
    	<div class="col"><p>Attach Document\'s</p></div>
<div class="col s6 m3 l3"><input type="file" multiple required></div>    	
</div>
       </div>

<div class="row">
            	<div class="col">
            		<p>
            		<input type="checkbox" id="staut" name="ck" onclick="validate()"/>
	                <label for="staut"><b>Accept Terms And Conditions</b></label></p>
	                </div>
	            </div>
        <input type="submit" id="subb" value="Submit" hidden>
	</div>
	</form>
</main>
	
	<!-- footer -->
	<footer class="page-footer card-panel red darken-4 text-white"> 
	<section>
<div class="row offset-12">
<section class="col">
	<ul>
		<li>Updated on:<p id="da1"></p></li>
		
	</ul>
</section>
</div>
	</section>
		<section class="footer-copyright red darken-1"><div class="container white-text text-darken-5">
			@Copyright Oil and Natural Gas Corporation Ltd.</div></section>
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

';
}
          else
          {
              echo "
                 <script type=\"text/javascript\"> 
                 alert(\"Invalid User\");
                   window.location.href = 'http://localhost/Ongc/home.html';
                 </script>
                  ";
          }
          
?>            
</body>
</html>

