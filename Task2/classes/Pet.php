<?php


namespace Task2\classes;


class Pet
{
    /**
     * @var string
     */
    protected $name;

    /**
     * Pet constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sit()
    {
        echo $this->name . ' set' . PHP_EOL;
    }

    public function getName()
    {
        return $this->name;
    }
}