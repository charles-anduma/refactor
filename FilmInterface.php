<?php

interface FilmInterface
{
    public function __construct(string $title);
    public function getTitle(): string;
    public function getRentalPrice(int $daysRented): int;
    public function getFrequentRenterPoints(int $daysRented): int;
}
