<?php

class LibraryItem{
    protected $title;
    protected $author;
    protected $available;

    public function __construct($title, $author)
    {
        $this->title = $title;
        $this->author = $author;
        $this->available = true;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setTitle($title){
        return $this->title = $title;
    }

    public function getAuthor(){
        return $this->author;
    }

    public function setAuthor($author){
        return $this->author = $author;
    }

    public function isAvailable(){
        return $this->available;
    }

    public function setAvailable($available){
        return $this->available = $available;
    }



    public function checkOut(){
        if($this->available){
            $this->available = false;
            echo "{$this->title} by {$this->author} has been checked out";
        }
        else{
            echo "{$this->title} by {$this->author} is already checked out";
        }
        
    }

    
    public function checkIn(){
        if($this->available){
            $this->available = true;
            echo "{$this->title} by {$this->author} has been checked in";
        }
        else{
            echo "{$this->title} by {$this->author} is already checked in";
        }
        
    }

}

class Book extends LibraryItem{
    private $isbn;

    public function __construct($title, $author, $isbn){
        parent::__construct($title, $author);
        $this->isbn = $isbn;
    }
    public function getIbsn(){
        return $this->isbn;
    }
    public function setIbsn(){
        return $this->isbn= $isbn;
    }
}

class DVD extends LibraryItem{
    private $duration;

    public function __construct($title, $author, $duration) {
        parent::__construct($title, $author);
        $this->duration = $duration;
    }

    
    public function getDuration() {
        return $this->duration;
    }

    public function setDuration($duration) {
        $this->duration = $duration;
    }
}

$book = new Book("Book 1", "Author 1", "4952");
$dvd = new DVD("Movie 1 ", "Author 1", "2 hours ");

$book->checkOut();
$book->checkIn();
$dvd->checkIn();
$dvd->checkOut();

echo "Book Title: " . $book->getTitle() . "\n";       
echo "Book ISBN: " . $book->getIbsn() . "\n";         
echo "DVD Title: " . $dvd->getTitle() . "\n";         
echo "DVD Duration: " . $dvd->getDuration() . "\n";