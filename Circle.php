<?php
   class Circle
   {
       private $radius;

       public function __construct($radius)
       {
           $this->radius=$radius;
       }

       public function getRadius()
       {
           return $this->radius;
       }

       public function setRadius($radius)
       {
           $this->radius=$radius;
       }

       public function perimeter()
       {
           return (2 * 3.14 * $this->radius);
       }

       public function area()
       {
           return (3.14 * $this->radius * $this->radius);
       }
   }

   $c1 = new Circle(5);
   $c1->setRadius(5);
   echo "Radius = " . $c1->getRadius() . "<br>";
   echo "Perimeter = " ;
   echo $c1->perimeter(). "<br>";
   echo "Area = " ;
   echo $c1->area()."<br>";
?>   