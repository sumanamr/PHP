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

     $stud_id = 10;
     $name = 'Swathi';
     $age = 21;
     $dob = '2000/05/10';

     $sql = "update student  set name = ?,age =?,dob = ? where stud_id=? ";
     $statement = $connection->prepare($sql);
     
     $statement->bind_param("sisi",$name, $age, $dob, $stud_id);

     $n = $statement->execute();
     if( $n != 1)
     throw new StudentNotFoundException();

 $statement->close();
 $connection->close();
?>     