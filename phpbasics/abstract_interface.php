<?php
//abstract
abstract class Student

{
    public $name;
    public $displaySubject;


    abstract public function displaySubject();
}
 class Classrep extends Student
{
    public function displayName()
   {
   echo 'Elizabeth Wangui</br></br>';
   }
     public function displaySubject()
   {
       $this->displaySubject= "Petroleum Engineering";
       echo "She is the class representative for $this->displaySubject</br></br></br>";
   }
}
class Departmentrep extends Student
{
    public function displayName()
    {
        echo 'Eugene Mureithi</br></br>';
    }
    public function displaySubject()
    {
        $this->displaySubject= "Computer Science";
        echo "He is the department representative for $this->displaySubject</br></br></br>";
    }
}
$classrep = new Classrep();
echo $classrep->displayName();
echo $classrep->displaySubject();
$departmentrep = new Departmentrep();
echo $departmentrep->displayName();
echo $departmentrep->displaySubject();



//interface
interface Shapes
{

   public function calculateArea();

}
interface Snacks
{
    public function combo();
}

class Circle implements Shapes, Snacks
{
    public $radius=10;
    public $pie=3.14;

    public function calculateArea()
    {
        $this->calculateArea = $this->radius * $this->radius * $this->pie;
        echo "The area of a circle is $this->calculateArea squared centimetres</br></br>";
    }

    public function combo()
   {
    $this->combo = "Oreo and milk";
    echo "$this->combo is the best combination ever";
   }
}
$circle = new Circle();
echo $circle->calculateArea();
echo $circle->combo();
?>