<?php

class FilmNewRelease extends Film implements FilmInterface
{
    /**
     * @param int $daysRented
     * @return int
     */
    public function getRentalPrice(int $daysRented): int
    {
        return $daysRented * 3;
    }

    /**
     * @param int $daysRented
     * @return int
     */
    public function getFrequentRenterPoints(int $daysRented): int
    {
        return $daysRented > 1 ? 2 : 1;
    }
}
