<?php
//vd1
 class Animal{
     function speak(){
         echo "Animal is speaking....";
     }
 }
 class Dog extends Animal{
     function speak(){
         echo "Dog is speaking....";
     }
 }
 $dog=new Dog();
 $dog->speak();
 echo "<br>";
//vd2
class DongVat{
    function  An(){
        echo "dong vat dang an";
    }
}
class ConLon extends DongVat{
    function An(){
        echo "con lon an cam";
    }
}
$conlon=new ConLon();
$conlon->An();
?>