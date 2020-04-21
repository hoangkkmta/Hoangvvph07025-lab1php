<?php
//vd1
class Pet{
    var $name;
    var $age;

    function __construct($pet_name="",$pet_age=0){
        $this->name=$pet_name;
        $this->age=$pet_age;
    }
    function eat(){
        echo "$this->name is eatting and $this->age age";
    }
}
class cat extends Pet{

}
$cat=new Pet('bucky',7);
$cat->eat();
echo "<br>";

//vd2
class Computer{
    var $picture;
    var $film;

    function __construct($com_pic="",$com_film=""){
        $this->picture=$com_pic;
        $this->film=$com_film;
    }
    function start(){
        echo"computer co ảnh $this->picture va co film $this->film";
    }
}
class Destop extends Computer{

}
$destop=new Computer('img','harryposter');
$destop->start();
?>