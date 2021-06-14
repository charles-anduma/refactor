<?php

class FilmRegular extends Film implements FilmInterface
{
    /**
     * @param int $daysRented
     * @return int
     */
    public function getRentalPrice(int $daysRented): int
    {
        $price = 2;
        if ($daysRented > 2) {
            $price += ($daysRented - 2) * 1.5;
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
