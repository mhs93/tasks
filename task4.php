<?php
abstract class Animal {
    abstract public function makeSound();
}

class Dog extends Animal{
    public function makeSound(){
        return "Woof!";
    }
}

class Cat extends Animal{
    public function makeSound()
    {
        return "Meow!";
    }
}

class Bird extends Animal{
    public function makeSound()
    {
        return "Tweet!";
    }
}

$dog = new Dog();
echo $dog->makeSound();

$cat = new Cat();
echo $cat->makeSound();

$bird = new Bird();
echo $bird->makeSound();