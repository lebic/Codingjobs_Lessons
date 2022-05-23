<?php

/*

INTERFACE

An interface look like a class BUT has only static properties or abstract methods.

We use, sometimes, interface to implement multiple inheritance.

Interfaces are used to implements/share roles WHEN no inheritance is involved.

Best practice :
    - Name of the file should be the same as the interface
    - Name of Interface should start with capital "I"
    Example : IExample


Abtract:
1. An Abstract class can contain regular methods (not abstract)
2. A class can be abstract without any abstract method.
3. If a class contain one or more abstract methods, it must be an abstract class.
4. Used to provide a template for potential future inherited

Interface:
1 Use an interface whe a role must be deifned for other classes as well, regardless of the inheritance of these classes.
2. You can't intantiate an interface and create an object
3. Interface can't contain concrete methods
4. A class can implement multiple interfaces


*/

interface IExample
{
    public function eat();
}

class Dog extends Animal implements IExample
{
    // I have to implement this method : mandatory
    public function eat()
    {
        echo 'Dog is eating from the bowl <br>';
    }
}

class Robot implements IExample
{
    public function eat()
    {
        echo 'Robot is eating electricity. <br>';
    }
}
