L - Liskov Substitution Principle

Object of a superclass must be replaceable with an object of a subclass without breaking the application.

<?php

interface Flyable
{
    public function fly();
}

class Bird
{
}

class Sparrow extends Bird implements Flyable
{
    public function fly()
    {
        echo "Sparrow is flying \n";
    }
}

class Parrot extends Bird implements Flyable
{
    public function fly()
    {
        echo "Parrot is flying \n";
    }
}

class Penguin extends Bird
{
    public function fly()
    {
        throw new Exception("Penguin can not fly");
    }
}

function MakeBirdFly(Flyable $bird)
{
    $bird->fly();
}

$sparrow = new Sparrow();
MakeBirdFly($sparrow);

$parrot = new Parrot();
MakeBirdFly($parrot);

// Error Penguin can not fly
// $penguin = new Penguin();
// MakeBirdFly($penguin); 