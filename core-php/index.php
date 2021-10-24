<?php
 /*class calculation{
   public $a,$b,$c;

   function sum(){
     $this->c = $this->a + $this->b;
     return $this->c;
   }

   function sub(){
    $this->c = $this->a - $this->b;
    return $this->c;
  }
 }

 $s= new calculation();
 $s->a=20;
 $s->b=5;

 $s1 = new calculation();
 $s1->a=30;
 $s1->b=15;

 echo "Sum value of s: " . $s->sum() . "/n";
 echo "Sub value of s1: " . $s1->sub() . "/n";*/

class multiplication{
  public $a, $b, $c;

  function sum(){
    $this->c = $this->a + $this->b;
    return $this->c;
  }

  function sub(){
    $this->c= $this->a - $this->b;
    return $this->c;
  }
}

$s= new multiplication();
$s->a= 20;
$s->b= 20;

$p= new multiplication();
$p->a= 30;
$p->b= 30;

echo "sum is:  " .$s->sum(). "</br>";
echo "Sub is: " .$p->sub(). "</br>";

?>