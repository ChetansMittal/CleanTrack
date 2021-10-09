<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';

   
   $conn = new mysqli('localhost','root','');
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'select region, count(*) as c FROM register GROUP BY region';
   mysqli_select_db($conn,'test');

   $retval = mysqli_query($conn, $sql);

   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }

   while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
     
      
      //echo json_encode($row['region']);
      $arr = array($row['region'] => $row['c']);
      echo json_encode($arr);
         
   }
   
   
  
   mysqli_close($conn);
   
?>

