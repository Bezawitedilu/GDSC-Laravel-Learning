 # PHP OOP Concepts: Inheritance, Polymorphism, and Method Overriding

This repository contains a PHP script that demonstrates fundamental object-oriented programming (OOP) concepts in PHP, including inheritance, polymorphism, and method overriding. The code is well-commented and explained step by step to help junior developers understand these concepts.

## Inheritance

Inheritance allows a new class (subclass or derived class) to inherit properties and methods from an existing class (base class or parent class). This helps organize code in a logical and modular way.

In the provided code, we have a base class called `Animal` that defines a protected property `$name` and two methods: `__construct()` and `speak()`. The `__construct()` method initializes the `$name` property, and the `speak()` method simply prints "Animal Speaks".

```php
class Animal {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function speak() {
        echo "Animal Speaks\n";
    }
}
```

## Polymorphism

Polymorphism allows different objects to be treated as objects of a common base class. It has two types: static (compile-time) and dynamic (runtime).

In PHP, method overloading (defining multiple methods with the same name in a class) is not supported. Instead, PHP uses method overriding, where the last declared method with the same name overrides the previous ones.

```php
class MathOperations {
    public function add($a, $b) {
        return $a + $b;
    }

    public function addThreeNums($a, $b, $c) {
        return $a + $b + $c;
    }
}

$math = new MathOperations();
echo $math->add(2, 3); // Output: 5
echo $math->addThreeNums(1, 2, 3); // Output: 6
```

## Method Overriding

Runtime polymorphism is achieved through method overriding, where a child class provides a specific implementation of a method already defined in its parent class.

```php
class Animal {
    public function makeSound() {
        echo "Animal sound";
    }
}

class Dog extends Animal {
    public function makeSound() {
        echo "Woof";
    }
}

class Cat extends Animal {
    public funciton makeSound(){
        echo "Meow";
    }
}

$dog = new Dog();
$cat = new Cat();

$animals = [$dog, $cat];

foreach ($animals as $animal){
    $animal -> makeSound();
}

//this prints woof for dog and mewo for cat resoectively


use allows to import a class intro the current namespace and optionally alias it to a different nam.

use Namespace\ClassName;
namepace Mynamespace;
use 

this is a special vairable that represents the current instance of a class. used in object methods to refer to current object.

can be used to access the properties fo the current object 

class Myclass{
    private $name;

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
}

$obj = new Myclass();
$obj->setName('John');
echo $obj ->getName();

//calling methids
class Calculator{
    private $result = 0;

    public function add($value){
        $this -> result += $value;
    }

    public function getResult(){
        return $this->result;
    }
}

$calculator = new Calculator();
$calculator->add(5);
$calculator->add(3);
echo $calculator->getResult();

