<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">   
        <title>ONGC::</title>
        <script type="text/javascript" src="js/js1.js"></script>            
        <script src="js/materialize.min.js"></script> 
        <script>
            
            </script>
    </head>
    <body>
        <?php
        include("export.php");
        include("notify.php");
        session_start();
        $var=$_POST["query"];
        if(isset($_POST["gr"]))
        {
         if($var=="cse" || $var=="ite")
         {
             export("comp");
         }
         else if($var=="civil")
         {
         export("civil");
         }
         else if($var=="chem")
         {
         export("chem");
         }
         else if($var=="ece")
         {
         export("ece");
         }
         else
         {
             echo "  <script type=\"text/javascript\"> 
                 alert(\"Please Enter cse,ite,civil,chem,ece!!!\");
                   window.location.href = 'http://localhost/Ongc/cse.php';
                 </script>
                  ";
          
         }
         }
        
        else if(isset($_POST["ns"]))
        {
            if($var=="cse" || $var=="ite")
         {
            notify("comp");
         }
         else if($var=="civil")
         {
         notify("civil");
         }
         else if($var=="chem")
         {
         notify("chem");
         }
         else if($var=="ece")
         {
         notify("ece");
         }
         else
         {
             echo "  <script type=\"text/javascript\"> 
                 alert(\"Please Enter cse,ite,civil,chem,ece!!!\");
                   window.location.href = 'http://localhost/Ongc/cse.php';
                 </script>
                  ";
          
         }
            
        }
          
        ?>
         
    </body>
</html>
