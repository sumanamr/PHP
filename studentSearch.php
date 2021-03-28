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

  $stud_id = 11;

  $sql = "select * from student where stud_id = ?"; 
  $statement = $connection->prepare($sql);
  
  $statement->bind_param("i",$stud_id);

  if($statement->execute())
  {
      $statement->bind_result($stud_id, $name, $age, $gender, $dob);
      if($statement->fetch())
      {
        echo 'student id          : '.$stud_id.'<br>';
        echo 'name                : '.$name.'<br>';
        echo 'age                 : '.$age.'<br>';
        echo 'gender              : '.$gender.'<br>';
        echo 'dob                 : '.$dob.'<br>';
      }
  }  
  else
  echo $ssn.' not found...'.'<br>';

$statement->close();
$connection->close();
?>  

