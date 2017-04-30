<html>
    <head>
        <title>ONGC::</title>
        <script src="js/materialize.js"></script>
<script src="js/bootstrap.js"></script>
<link rel="stylesheet" href="css/materialize.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap.css">
    </head>    
    <body>
        <header class="row grey lighten-4 z-depth-1">
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
        </header>
<?php
function notify($table){
if(isset($_SESSION["username"])){
    $con = mysqli_connect("localhost", "root", "admin", "ongc");  
  
      $sql = "SELECT * FROM $table";  
      $result = mysqli_query($con, $sql);  
      if(mysqli_num_rows($result) > 0)  
      {   
      echo   '  <table  align="center"  >
      
                   <pre>
                   <tr>
<th>Name</th>
<th>Category</th>
<th>Present Sem.</th>
<th>Last Sem Perc.</th>
</tr>
                   </pre>
               
                    ';
                while($row=mysqli_fetch_row($result)){
                    
                
                echo '   <tr>
<td>'.$row[0].'</td>
<td>'.$row[3].'</td>
<td>'.$row[11].'</td>
<td>'.$row[12].'</td>
</tr>

        ';           
      }
      
		echo '<form method="POST" action="notify1.php">		
                    <div class="col s4 m4 l3">
                                    <Label style="font-size:20px"><b>Enter The Selection Criteria</b></Label>
				</div>
                                <div class="col s4 m4 l3">
                                    <Label><b>Present Semester:</b></Label>
				</div>
                                
                            <div class="col s2 m2 4"><input type="number" name="qu" ></div>
                            <div class="col s4 m4 8">
                                    <Label><b>Last Semester Percentage:</b></Label>
				</div>
                                
                            <div class="col s2 m2 4"><input type="number" name="qu1" ></div>
                            <div class="col s4 m4 8">
                                    <Label><b>Branch(comp,civil,ece,chem):</b></Label>
				</div>
                                
                            <div class="col s2 m2 4"><input type="text" name="qu2" ></div>                            
<input type="submit" value="Shortlist">&nbsp;&nbsp;
                            
                                 <button type="submit" name="Register"><a href="logout.php">Logout</a></button>
                            </form>
                                ';
      }
 else{
      echo "
                 <script type=\"text/javascript\"> 
                 alert(\"No Records Present\");
                   window.location.href = 'http://localhost/Ongc/cse.php';
                 </script>
                  ";
          
     
 }
}
}
 ?>
        
    </body>
</html>
 