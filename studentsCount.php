<?php 
   $host = 'localhost:3306';
   $userName = 'root';
   $password = '';
   $dbName = 'institute';

   $connection = mysqli_connect($host, $userName, $password, $dbName);

   if(mysqli_connect_errno())
      echo "Failed to connect to database : ". mysqli_connect_errno();
   else
      echo "Connection successfull..."."<br>";
      
   $sql = "select * from student";
   $resultSet = $connection->query($sql);
   
   $rowCount = $resultSet->num_rows;
   echo 'No. of rows : '.$rowCount.'<br>';

   $resultSet->close();
   $connection->close();
?>   