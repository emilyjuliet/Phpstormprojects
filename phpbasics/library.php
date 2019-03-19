<?php

class Library
{
    public $borrow;
    public $return;
    private $sell;
    protected $rent;
    public $book;
    public $price;
    public $duration;


public function setBorrow($borrow)
    {
        $this->borrow = $borrow;
        return $this;
    }

    public function setReturn($return)
    {
        $this->return = $return;
        return $this;
    }

    public function setSell($book, $price)
    {
        $this->sell = $book. ' - ' .$price;
        return $this;

    }

    public function calculateRent($duration, $price)
    {
        $this->rent = $duration * $price;
        return $this;

    }

    public function getDetails()
    {
        echo "Borrow:$this->borrow Return:$this->return Sell:$this->sell Rent:$this->rent";
    }
}

$library = new Library();
$library->setBorrow('Perfect Addiction</br></br>')->setReturn('Perfect Illusion</br></br>')->setSell('Roommates', 'Ksh 700</br></br>')->calculateRent(2, 50)->getDetails();


class Schoollibrary
{
    private $borrow;
    private $return;
    private $sell;
    private $rent;

    public function __construct($borrow, $return, $sell, $rent)
    {
        $this->borrow = $borrow;
        $this->return = $return;
        $this->sell = $sell;
        $this->rent = $rent;
    }

    public function getDetails()
    {
        return ' </br></br></br>The book borrowed is: ' . $this->borrow . '</br></br>The book returned is: ' . $this->return . '</br></br>Price of the book is: ' . $this->sell . '</br></br>Renting the book per week is: ' . $this->rent;

    }
}
$schoollibrary = new Schoollibrary("Perfect Addiction", "Perfect Illusion", "Ksh 700", "Ksh 50");
echo $schoollibrary -> getDetails();

?>