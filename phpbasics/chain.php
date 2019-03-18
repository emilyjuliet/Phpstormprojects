<?php
//class Student
//{
//
//    private $name;
//
//    public function setName($name)
//    {
//        $this->name = $name;
//        return $this;
//    }
//    public function getName()
//    {
//        echo 'The student name is:'.$this->name;
//    }
//}
//$student = new Student();
//$student->setName(Josephine);
//$student->getName();


//class Car {
//    private $model;
//    private $price;
////__construct
//    public function __construct ($model,$price)
//    {
//        $this->model = $model;
//        $this->price = $price;
//    }
//    public function getCarModel()
//    {
//        return ' The car model is: ' . $this -> model .  '</br></br>The price is: '. $this->price ;
//
//    }
//}
//
////We pass the value of the variable once we create the object
//$car1 = new Car("Mercedes", "40,000 dollars");
//echo $car1 -> getCarModel();




class Restaurant
{
    public $name;
    public $order;
    public $bill;
    public $food;
    public $price;
    public $quantity;

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setOrder($food, $price)
    {
        $this->order = $food . '=' . $price;
        return $this;

    }

    public function calculateBill($quantity, $price)
    {
        $this->bill = $quantity * $price;
        return $this;

    }

    public function getDetails()
    {
        echo "Name:$this->name Order:$this->order Bill:$this->bill";
    }
}

$restaurant = new Restaurant();
$restaurant->setName('Porkpit Ruaka</br></br>')->setOrder('burger','Ksh 400</br></br>')->calculateBill(2, 400)->getDetails();
?>

