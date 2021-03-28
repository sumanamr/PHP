<?php
   class Summation
   {
       public static function sum($n)
       {
           $sum=0;
           for($i =1; $i<=$n; $i++)
              $sum+=$i;
            echo $sum;
        }  
       
        
   }
   echo Summation::sum(10);
?>   