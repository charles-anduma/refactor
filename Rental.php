<?php

class Rental
{
    private Film $film;
    private int $daysRented;

    /**
     * Rental constructor.
     * @param Film $film
     * @param int $daysRented
     */
    public function __construct(Film $film, int $daysRented)
    {
        $this->film = $film;
        $this->daysRented = $daysRented;
    }

    /**
     * @return int
     */
    public function getRentalPrice(): int
    {
        return $this->film->getRentalPrice($this->daysRented);
    }

    /**
     * @return int
     */
    public function getFrequentRenterPoints(): int
    {
        return $this->film->getFrequentRenterPoints($this->daysRented);
    }

    /**
     * @return int
     */
    public function getDaysRented(): int
    {
        return $this->daysRented;
    }

    /**
     * @return Film
     */
    public function getFilm(): Film
    {
        return $this->film;
    }
}
