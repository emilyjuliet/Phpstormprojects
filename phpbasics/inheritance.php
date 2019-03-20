<?php

class Student
{
    protected $firstname;
    protected $lastname;

    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
        return $this;
    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
        return $this;
    }

    public function getDetails()
    {
        echo "Firstname:$this->firstname Lastname:$this->lastname";
    }
}

class Classrep extends Student
{
    public function rescheduleClass($day)
    {
        echo "$this->firstname $this->lastname has received information that the class will be rescheduled to $day";
    }
}

$student = new Student();
$student->setFirstname('Brian</br></br>')->setLastname('Wanjohi')->getDetails();

$classrep = new Classrep();
$classrep->setFirstname('</br></br></br>Brian')->setLastname('Wanjohi')->rescheduleClass('Monday')->getDetails();

?>