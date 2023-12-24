<!-- class myClass{
   } 

   $myObject = new myClass();

   /constructor

   class myClass{
    public function__construct()
   }

    class myClass{
    public functio__destruct()
   }

   //inheritance : new subclass or derived class can inherit properties and methods from an existing class, 
   base class or parent class, helps to organize code in a logical and modular way

   class Animal{
    protected $name;

   public function__construct($name){
    $this->name = $name;
   }

   public function speak(){
    echo "Animal Speaks\n"
   }

}

class Dog extends Animal{
    public function bark(){
        echo "Woof!";
    }
    //ovverirde the speak method from the parent class

    public function speak(){
        echo "Dog barks";
    }
}

POLYMORPHISM- different objects be treated a sobjets of a common base class.
Has two types: static (compile-time ) and dynamic (rumtime) 
- method overloading in php refers tge ability to odefine multiple methods with thte smae name in a class.
php doesnt noto support over loading leza what it does is overriding.
if yu declare multiple methods wiht the smae name inna class, the last oene will override the previous one.

example:
class MathOperation{
    public function add ($a, $b){
        return $a + $b;
    }
    public function addThreeNums($a, $b, $c){
        return $a + $b + $c;
    }
}

$math = new MathOperations();
echo $math ->add(2,3);
echo $math -> addThreeNums(1,2,3);

Runtime Polymorphism - overriding allows a child class to provide specific implementation or method that is already defind in its parent class

class Animal {
    public function makeSound(){
        echo "Animal sound";
    }
}

class Dog extends Animal{
    public function makeSound(){
        echo "Woof";
    }
}

class Cat extends Anmial{
    public function makeSound(){
        echo "Meow";
    }
}

using runtime polymorphism
$dog = new Dog();
$cat = new Cat();

$animals = [$dog, $cat];

foreach($animals as $animal){
    $animal ->makeSound();
}

-->



<!-- final and abstract are keywords used to control the 
beahavior of classes and methods.

final keywoard is class, method or property can not be extended overriden or furhter modified by child classes

final class FinalClass{

}

class ParentClass{
    final public function myMethod(){

    }

    class childClass extends ParentClass{
        //impossibke
    }

    final public $myProperty = 10;


    abstract cant be instantiated on its own, it serves as a blueprint for other classes
    abstract class must be extended 

    abstract class Shape{
        abstract public function calculateArea()
    }

    class Circle extends Shape{
        private $radius;
        public function __construct($radius){
            $this->radius = $radius;
        }

        publuc function calculateArea(){
            return pi()* $this->radiys * $this->radius;
        }
    }

    $circle = new Circle(5);
    cho $circle->calculateArea();

-->