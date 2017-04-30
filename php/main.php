<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">   
        <title>ONGC::</title>
        <script>
            window.confirm("Do you want to finally submit.Note:This cannot be undone.Please Verify all the details");
        </script>
    </head>
    <body>
        <?php
           $con=mysqli_connect("localhost", "root", "admin", "ongc");
          $name=$_POST["nm1"];
          $dob=$_POST["dob"];
          $gen=$_POST["gender"];
          $cat=$_POST["category"];
          $add=$_POST["add"];
          $emaal=$_POST["emla"];
          $mob=$_POST["mob"];
          $pname=$_POST["pname"];
          $pocc=$_POST["pocc"];
          $pins=$_POST["pins"];
          $pc="civil";
          $psem=$_POST["psem"];
           $lsperc=$_POST["lsperc"];
           $tenperc=$_POST["tenperc"];
            $des=$_POST["des"];
            $cpf=$_POST["cpf"];
            $mobi=$_POST["mobi"];
            $loc=$_POST["loc"];
            $sec=$_POST["sec"];
            if($pc=="cse"||$pc=="ite")
            {
                $a=mysqli_query($con,"insert into comp values ('$name','$dob','$gen','$cat','$add','$emaal','$mob','$pname','$pocc','$pins','$pc','$psem','$lsperc','$tenperc','$des','$cpf','$mobi','$loc','$sec')");
            }
          else if($pc=="ece")
            {
                $a=mysqli_query($con,"insert into ece values ('$name','$dob','$gen','$cat','$add','$emaal','$mob','$pname','$pocc','$pins','$pc','$psem','$lsperc','$tenperc','$des','$cpf','$mobi','$loc','$sec')");
            }
            else if($pc=="civil")
            {
                $a=mysqli_query($con,"insert into civil values ('$name','$dob','$gen','$cat','$add','$emaal','$mob','$pname','$pocc','$pins','$pc','$psem','$lsperc','$tenperc','$des','$cpf','$mobi','$loc','$sec')");
            }
            else if($pc=="chem")
            {
                $a=mysqli_query($con,"insert into chem values ('$name','$dob','$gen','$cat','$add','$emaal','$mob','$pname','$pocc','$pins','$pc','$psem','$lsperc','$tenperc','$des','$cpf','$mobi','$loc','$sec')");
            }
         
         
             echo "
                 <script type=\"text/javascript\"> 
                 alert(\"Registered\");
                   window.location.href = 'http://localhost/Ongc/active.php';
                 </script>
          ";
          mysqli_close($con);
        ?>
         
    </body>
</html>
