<?php

class flowers
{
    public $name;
    public $color;
    public $price;


    public function details()
    {
        echo'Flowers are a girls bestfriend :)</br></br>';
        echo $flowers->name = 'Sunflower</br></br>';
        echo $flowers->color = 'Yellow</br></br>';
        echo $flowers->price = 'Ksh 1000</br></br></br>';
    }


    public function offer()
    {
        print ('We deliver them right at your doorstep for free!</br></br></br>');
    }


    public function season()
    {
        print('Get yours while stocks last!</br></br></br>');
    }
}

$details = new flowers();
$details->details();

$offer = new flowers();
$offer->offer();

$season = new flowers();
$season->season();

?>
