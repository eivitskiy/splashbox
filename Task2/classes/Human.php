<?php


namespace Task2\classes;


class Human
{
    /**
     * @var string
     */
    protected $first_name, $last_name;

    /**
     * @var Cat|Dog
     */
    protected $pet;

    /**
     * Human constructor.
     * @param string $first_name
     * @param string $last_name
     * @param null|Cat|Dog $pet
     */
    public function __construct(string $first_name, string $last_name, $pet = null)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->pet = $pet;
    }

    /**
     * @return bool
     */
    public function hasPet()
    {
        return $this->pet ? true : false;
    }

    /**
     * @return Cat|Dog|null
     */
    public function getPet()
    {
        return $this->pet;
    }
}