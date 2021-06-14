<?php


class FilmFactory
{
    /**
     * Price codes
     */
    const PRICE_CODE_CHILDRENS = 2;
    const PRICE_CODE_NEW_RELEASE = 1;
    const PRICE_CODE_REGULAR = 0;

    /**
     * @param int $priceCode
     * @param string $title
     * @return FilmChildrens|FilmNewRelease|FilmRegular
     * @throws Exception
     */
    public static function make(string $title, int $priceCode){
        switch ($priceCode) {
            case self::PRICE_CODE_CHILDRENS:
                return new FilmChildrens($title);
            case self::PRICE_CODE_NEW_RELEASE:
                return new FilmNewRelease($title);
            case self::PRICE_CODE_REGULAR:
                return new FilmRegular($title);
        }
        throw new Exception('Invalid price code supplied');
    }
}