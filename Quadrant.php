<?php
   require_once 'Point.php';

   class Quadrant
   {
       public static function findQuadrant(Point $p)
       {
           $x = $p->getX();
           $y = $p->getY();

           if ($x > 0 && $y > 0) return 1;
           else if ($x < 0 && $y > 0) return 2;
           else if ($x < 0 && $y < 0) return 3;
           return 4;
       }  
   }
   
   $p1 = new Point(2,5);
   $p1->setX(2);
   $p1->setY(5);
   echo "The given point is ( " . $p1->getX() . ", " . $p1->getY() . ")" . "<br>";
   echo "Quadrant is ";
   echo Quadrant::findQuadrant($p1) . "<br>";
 
   $p2 = new Point(-8,-4);
   $p2->setX(-8);
   $p2->setY(-4);
   echo "The given point is ( " . $p2->getX() . ", " . $p2->getY() . ")" . "<br>";
   echo "Quadrant is ";
   echo Quadrant::findQuadrant($p2);

?>   