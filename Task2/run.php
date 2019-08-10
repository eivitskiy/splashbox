<?php

require __DIR__ . '/vendor/autoload.php';

use Task2\classes\{Cat, Dog, Human};

$cat1 = new Cat('Ada');
$cat2 = new Cat('Eva');

$dog1 = new Dog('Rex');
$dog2 = new Dog('Max');

$human1 = new Human('Michael', 'Smith');
$human2 = new Human('Alex', 'Jones', $dog2);

$cat1->sit();
$cat1->makeNoises();

$cat2->sit();
$cat2->makeNoises();

$dog1->sit();
$dog1->makeNoises();

$dog2->sit();
$dog2->makeNoises();

if ($human1->hasPet()) {
    $human1->getPet()->getName();
}

if ($human2->hasPet()) {
    echo $human2->getPet()->getName() . PHP_EOL;
    $human2->getPet()->sit();
}