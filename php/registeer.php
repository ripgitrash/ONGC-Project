<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">   
        <title>ONGC::</title>
    </head>
    <body>
        <?php
           $con=mysqli_connect("localhost", "root", "admin", "ongc");
          $name=$_POST["nm"];
          
          $email=$_POST["emaal"];
           $uid=$_POST["uid"];
            $pswrd=$_POST["pass"];
          $a=mysqli_query($con,"insert into reg values ('$name','$email','$uid','$pswrd')");
          mysqli_close($con);
          if($a)
             echo "
                 <script type=\"text/javascript\"> 
                 alert(\"Registered\");
                   window.location.href = 'http://localhost/Ongc/register.html';
                 </script>
                  ";
        ?>
    </body>
</html>
