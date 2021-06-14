<?php

class FilmChildrens extends Film implements FilmInterface
{
    /**
     * @param int $daysRented
     * @return int
     */
    public function getRentalPrice(int $daysRented): int
    {
        $price = 1.5;
        if ($daysRented > 3) {
            $price += ($daysRented - 3) * 1.5;
        }
        return $price;
    }

    /**
     * @param int $daysRented
     * @return int
     */
    public function getFrequentRenterPoints(int $daysRented): int
    {
        return 1;
    }
}
