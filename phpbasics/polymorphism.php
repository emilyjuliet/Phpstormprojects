<?php

//abstract
abstract class User
{
    abstract public function calculateScores();
}
class Author extends User
{
    protected $scores;
    protected $numberofArticles;

    public function __construct($numberofArticles)
    {

       $this -> numberofArticles = $numberofArticles;

    }

   public function calculateScores()
   {
        $this->scores= $this -> numberofArticles * 10;
        echo "The author has a score of $this->scores</br></br>";
   }
}
class Editor extends User
{
    protected $scores;
    protected $numberofArticles;

    public function __construct($numberofArticles)
    {

        $this -> numberofArticles = $numberofArticles;

    }

    public function calculateScores()
    {
        $this->scores= $this -> numberofArticles * 10;
        echo "The editor has a score of $this->scores</br></br></br>";
    }
}

$author = new Author('30');
$author->calculateScores();

$editor = new Editor('50');
$editor->calculateScores();

//interface
interface Student
{

    public function calculateScores();

}
class Jamie implements Student
{
    protected $scores;
    protected $assignment;
    protected $cat;

    public function __construct($assignment,$cat)
    {

        $this -> assignment = $assignment;
        $this -> cat = $cat;

    }

    public function calculateScores()
    {
        $this->scores= $this -> assignment + $this -> cat;
        echo "Jamie's final score for the semester is $this->scores</br></br>";
    }
}
class Brittany implements Student
{
    protected $scores;
    protected $assignment;
    protected $cat;

    public function __construct($assignment,$cat)
    {

        $this -> assignment = $assignment;
        $this -> cat = $cat;

    }

    public function calculateScores()
    {
        $this->scores= $this -> assignment + $this -> cat;
        echo "Brittany's final score for the semester is $this->scores</br></br>";
    }
}

$jamie = new Jamie('8', '20');
$jamie->calculateScores();

$brittany = new Brittany('10', '16');
$brittany->calculateScores()

?>