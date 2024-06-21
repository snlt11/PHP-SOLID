I - Interface Segregation Principle

A client should never be forced to implement an interface that it doesn't use or
    clients shouldn't be forced to depend on methods they do not use


<?php

interface Workable
{
    public function work();
}
interface Eatable
{
    public function eat();
}

class Human implements Workable, Eatable
{
    public function work()
    {
        echo "Human is working";
    }
    public function eat()
    {
        echo "Human is eating";
    }
}

class Robot implements Workable
{
    public function work()
    {
        echo "Robot is working";
    }
}

$human = new Human();

$human->work();

$human->eat();

$robot = new Robot();

$robot->work();
