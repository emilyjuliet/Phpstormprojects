<?php

class Student
{
    public $name;
    public $studentid;

    public function __construct($name, $studentid)
    {
        $this->name = $name;
        $this->studentid = $studentid;
    }

    public function __toString()
    {
        return 'Her name is: ' . $this->name . '</br></br>The students registration id is: ' . $this->studentid;
    }
}

$student = new Student('Emily Juliet', '204/2019');
echo $student;

class Officer
{
    private $responsibility = [];

public function __isset($name) {
    return isset($this->responsibility[$name]);
}

public function __unset($name) {
    unset($this->responsibility[$name]);
}
}

$officer = new Officer();

$officer->a = "</br></br></br>checking of national id";

echo $officer->a;

echo $officer->b;

if (isset($officer->a)) {
    unset($officer->a);
}

?>