<?php
require('db.php');
 $sql="SELECT * FROM students";
$mysqlresult=mysqli_query($con, $sql);

$count=mysqli_num_rows($mysqlresult);

    ?>
    
<table border="5">
  <thead>
    <tr>
      <th>Name of the Student</th>
      <th>Roll number</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
      if( $count==0 ){
        echo '<tr><td colspan="4">No data to display</td></tr>';
      }
      else
      {
        while( $row =mysqli_fetch_assoc( $mysqlresult ) ){
          
          echo "<tr><td>{$row['studname']}</td><td>{$row['rollnumber']}</td></tr>\n";

        
        }
      }
    ?>
  </tbody>
</table>
    





















































































































































