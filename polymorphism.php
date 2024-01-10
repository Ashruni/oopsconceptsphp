<!-- 178 -->
<!-- Create an interface Animal with a method makeSound().
Implement this interface in three classes: Dog, Cat, and Bird.
Each class should have its own implementation of makeSound().
Create an array of Animal objects and call makeSound() on each one. -->
<?php 
interface Animal{
    function makeSound();
    }
// Dog, Cat, and Bird
class Dog implements Animal{
    function makeSound(){
        echo "Dogs bark :";
    }

}
class Cat implements Animal{
    function makeSound(){
        echo "cats Meow :";
    }
}
class Bird implements Animal{
    function makeSound(){
        echo "Birds chirp :";
    }
}
$newObject = new Bird();
$newObject->makeSound();
$newObject1 = new Dog();
$newObject1->makeSound();
$newObject2 = new Cat();
$newObject2->makeSound();
// $array=array($newObject,$newObject1,$newObject2);

// var_dump($array);

?>
// 179
// Method Overriding:
// Create a base class Vehicle with a method startEngine().
// Extend the Vehicle class with two subclasses: Car and Motorcycle. 
// Override the startEngine() method in both subclasses.
// Create objects of both subclasses and call the startEngine() method on each.
<?php 
class Vehicle{
    function startEngine(){
        echo "Vehicles need to start :";
    }
}
class Car extends Vehicle{
    function startEngine(){
        echo "Car has started  \n";
    }
}
class Motorcycle extends Car{
    function startEngine(){
        echo "Motorcycle has started  \n";
    }
}
$newObject1 = new Car();
$newObject1->startEngine();
$newObject2 = new Motorcycle();
$newObject2 -> startEngine();
?>
<!-- 180 -->
<!-- Create a function calculateArea that accepts an 
object implementing an interface Shape with a calculateArea() method.
The function should call the calculateArea() method
 on the provided object and return the result.
Test the function with instances of different classes
 implementing the Shape interface, such as Circle and Square. -->
 <?php 
 Interface Shape{
    function calculateArea($radius);
 }
 class Circle implements Shape{
    function calculateArea($radius){
        echo "area of a circle : ".(3.14*$radius**2)."\n" ;
    }

 }
 class Square implements Shape{
    function calculateArea($sides){
        echo "area of a square : ".($sides**2)."\n";
    }
 }
 $newObject1 = new Circle();
 $newObject1->calculateArea(4);
 $newObject2 = new Square();
 $newObject2->calculateArea(5);
 ?>
 <!-- 181 -->
 <!--
Define an interface Drawable with a method draw().
Implement two classes, Circle and Square, that implement the Drawable interface.
Demonstrate polymorphism by creating a list of Drawable objects and calling their draw() methods.

 -->

 <?php 
 interface Drawable{
    function draw();
 }
 class Circles implements Drawable{
    function draw(){
        echo "Circle is a closed surface \n ";
    }
 }
 class Squares implements Drawable{
    function draw(){
        echo "Square is a closed surface ";
    }
 }
 $newObjects= new Circles();
 $newObjects->draw();
 $newObjects1= new Squares();
 $newObjects1->draw();
 ?>
<!-- 182 -->
<!-- 
Create a class Vector that represents a 2D vector.
Overload the + operator to allow adding two vectors.
Demonstrate polymorphism by adding two 
instances of the Vector class using the + operator. -->
