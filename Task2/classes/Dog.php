<?php


namespace Task2\classes;


class Dog extends Pet implements Noises
{
    public function makeNoises()
    {
        echo "A dog {$this->name} says woof" . PHP_EOL;
    }
}