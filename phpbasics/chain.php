<?php

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
        $this->order = $food . '='. $price;
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

