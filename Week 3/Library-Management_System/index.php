<!-- Scenario: Building a Library Management System

Create a class called "LibraryItem" that represents a generic item in the library. 
This class should have properties such as "title", "author", and "available" to track the availability of the item.
 Implement appropriate getter and setter methods.
Create two child classes, "Book" and "DVD", that inherit from the "LibraryItem" class.
 These classes should have additional properties specific to books and DVDs, such as "ISBN" for books and "duration" for DVDs.
  Implement appropriate getter and setter methods.
Add a method called "checkOut" to the "LibraryItem" class that marks the item as unavailable when borrowed. 
Similarly, add a method called "checkIn" that marks the item as available when returned.
Create instances of the "Book" and "DVD" classes, set their properties, and test the check-out and check-in functionality. -->

<?php
class LibraryItem {
    public $title;
    public $author;
    public $available;

    public function checkOut() {
        if ($this->available) {
            echo "{$this->title} has been checked out.\n";
            $this->available = false;
        } else {
            echo "{$this->title} is already checked out.\n";
        }
    }

    public function checkIn() {
        if (!$this->available) {
            echo "{$this->title} has been checked in.\n";
            $this->available = true;
        } else {
            echo "{$this->title} is already checked in.\n";
        }
    }

}

class Book extends LibraryItem {
    public $booknumber;
}

class DVD extends LibraryItem {
    public $duration;

}

$book = new Book();
$book->title = "Rich dad poor dad";
$book->author ="Robins";
$book->available = true;
$book->booknumber = "78525-153-252";

$dvd = new DVD();
$dvd->title = "Wedding movie";
$dvd->author = "Indiviual";
$dvd->available = true;
$dvd->duration = "148 minutes";

$book->checkOut();
$book->checkIn();

$dvd->checkOut();
$dvd->checkOut(); 
$dvd->checkIn();
?>
