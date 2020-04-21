<?php
 class Animal{
   private $name="Hoangvv";
   public function setname($newname){
       $this->name=$newname;
   }
   public function getname(){
       return $this->name;
   }

 }
 class obj extends Animal{
     public function getage(){
         return this->age;
     }
 }
 $nam=new obj();
 $nam->setage(29);
 echo $nam->getage();
 
?>