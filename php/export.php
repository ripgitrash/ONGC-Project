<?php
function export($table){
 $con = mysqli_connect("localhost", "root", "admin", "ongc");  
 $output = '';  
      $sql = "SELECT * FROM $table";  
      $result = mysqli_query($con, $sql);  
      if(mysqli_num_rows($result) > 0)  
      {  
           $output .= '  
                <table class="table" bordered="1">  
                     <tr>  
                          <th>Name</th>  
                          <th>DOB</th>  
                          <th>Gender</th>
                          <th>Category</th>
                          <th>Address</th>
                          <th>Email</th>
                          <th>Mobile</th>
                          <th>Parent Name</th>
                          <th>Parent Occupation</th>
                          <th>Present Institute</th>
                          <th>Present Course</th>
                          <th>Present Sem</th>
                          <th>Last Sem Percentage</th>
                          <th>10th Percentage</th>
                          <th>Designation</th>
                          <th>CPF</th>
                          <th>Mobile</th>
                          <th>Loacation</th>
                          <th>Section</th>
                     </tr>  
           ';  
           while($row = mysqli_fetch_row($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>'.$row[0].'</td>
                          <td>'.$row[1].'</td>  
                          <td>'.$row[2].'</td>  
                          <td>'.$row[3].'</td>  
                          <td>'.$row[4].'</td>  
                          <td>'.$row[5].'</td>  
                          <td>'.$row[6].'</td>  
                          <td>'.$row[7].'</td>  
                          <td>'.$row[8].'</td>  
                          <td>'.$row[9].'</td>  
                          <td>'.$row[10].'</td>  
                          <td>'.$row[11].'</td>  
                          <td>'.$row[12].'</td>  
                          <td>'.$row[13].'</td>  
                          <td>'.$row[14].'</td>  
                          <td>'.$row[15].'</td>  
                          <td>'.$row[16].'</td>  
                          <td>'.$row[17].'</td>
                          <td>'.$row[18].'</td>
                     </tr>  
                ';  
           }  
           $output .= '</table>';  
           header("Content-Type: application/xls");   
           header("Content-Disposition: attachment; filename=trainee-list.xls");  
           echo $output;  
      }
 else {
 echo "No Record To Display!!!";         
 }
 }