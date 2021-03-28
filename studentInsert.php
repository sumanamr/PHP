<?php
  $host = 'localhost:3306';
  $userName = 'root';
  $password = '';
  $dbName = 'institute';

  $connection = mysqli_connect($host, $userName, $password, $dbName);

  if (mysqli_connect_errno())
     echo "Failed to connect to database : " . mysqli_connect_errno();
  else
     echo "Connection successfull..."."<br>";

  $stud_id = 15;
  $name = 'Harsha';
  $age = 20;
  $gender = 'M';
  $dob = '2000/06/05';     
 
  $sql = "insert into student values(?,?,?,?,?) ";
  $statement = $connection->prepare($sql);

  $statement->bind_param("isiss",$stud_id, $name, $age, $gender, $dob);

  if($statement->execute())
    echo "Insertion success..."."<br>";
  else
    echo $statement->error.'<br>';
 
  $statement->close();
  $connection->close();
?>  
