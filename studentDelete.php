<?php
   $host = 'localhost:3306';
   $userName = 'root';
   $password = '';
   $dbname = 'institute';

   $connection = mysqli_connect($host, $userName, $password, $dbname);

   if(mysqli_connect_errno())
      echo "Failed to connect to database : " . mysqli_connect_errno();
   else
      echo "Connection successfull..."."<br>";

   $stud_id = 15;
   $sql = "delete from student where stud_id = ?";

   $statement = $connection->prepare($sql);

   $statement->bind_param("i",$stud_id);
   
   $res = $statement->execute();
   $n = mysqli_affected_rows($connection);

   if($n == 1)
     echo "Delete success"."<br>";
   else
     echo 'Not found'.'<br>';
     
   $statement->close();
   $connection->close();
?>     

