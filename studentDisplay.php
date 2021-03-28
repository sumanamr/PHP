<?php 
   $host = 'localhost:3306';
   $userName = 'root';
   $password = '';
   $dbName = 'institute';

   $connection = mysqli_connect($host, $userName, $password, $dbName);

   if(mysqli_connect_errno())
     echo "Failed to connect to database : " . mysqli_connect_errno();
   else
     echo "Connection successfull..." . "<br>";
   
  $sql = "select * from student";
  $resultSet = $connection->query($sql);

  if($resultSet->num_rows > 0)
    while($row = $resultSet->fetch_assoc())
       echo $row["stud_id"].' '.$row["name"].' '.$row["age"].' '.$row["gender"].' '.$row["dob"]."<br>";

  $resultSet->close();
  $connection->close();
?>

  
  