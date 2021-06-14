<?php

class Customer
{
    private string $name;
    private array $rentals;

    /**
     * Customer constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
        $this->rentals = [];
    }

    /**
     * @param Rental $rental
     */
    public function addRental(Rental $rental)
    {
        array_push($this->rentals, $rental);
    }

    /**
     * @return array
     */
    public function getRentals(): array
    {
        return $this->rentals;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
