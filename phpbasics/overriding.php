<?php
class Fruits
{
    public $nutrionalvalues;
    protected $nonfooduses;

    final public function nutrition()
    {
        echo 'Fruits have very many nutrional benefits';
    }

    public function setNonfooduses()
    {
        $this->nonfooduses = 'natural dyes';

    }

    public function getDetails()
    {
        echo "Nonfooduses:$this->nonfooduses";
    }
}

class Mango extends Fruits
{
    public function nutrition()
    {
        echo 'Mango is very rich in fibre and vitamin C';
    }
}

$mango = new Mango();
echo $mango->nutrition();

?>