<?php


namespace Task2\classes;


class Cat extends Pet implements Noises
{
    public function makeNoises()
    {
        echo "A cat {$this->name} says meow" . PHP_EOL;
    }
}