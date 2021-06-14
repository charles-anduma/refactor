<?php

class Statement
{
    /**
     * @param Customer $customer
     * @return string
     */
    public function getStatement(Customer $customer)
    {
        $statementString = "Rental Record for " . $customer->getName() . "\n";
        foreach ($customer->getRentals() as $rental) {
            //show figures for this rental
            $statementString .= "\t" . $rental->getFilm()->getTitle() . "\t" . $rental->getRentalPrice() . "\n";
        }
        $statementString .= "\tTotal Amount: " . $this->getTotalRentalPrice($customer->getRentals()) . "\n";
        $statementString .= "\tFrequent Rental Points: " . $this->getTotalFrequentRenterPoints($customer->getRentals()) . "\n";
        return $statementString;
    }

    /**
     * @param Rental[] $rentals
     * @return int
     */
    public function getTotalRentalPrice(array $rentals): int
    {
        $totalRentalPrice = 0;
        foreach ($rentals as $rental) {
            //determine amounts for each line
            $totalRentalPrice += $rental->getRentalPrice();
        }
        return $totalRentalPrice;
    }

    /**
     * @param Rental[] $rentals
     * @return int
     */
    public function getTotalFrequentRenterPoints(array $rentals)
    {

        $frequentRenterPoints = 0;
        foreach ($rentals as $rental) {
            // add frequent renter points
            $frequentRenterPoints += $rental->getFrequentRenterPoints();
        }
        return $frequentRenterPoints;
    }
}
