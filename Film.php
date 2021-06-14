<?php

class Film
{

    private string $title;
    /**
     * Film constructor.
     * @param string $title
     * @param int $priceCode
     */
    public function __construct(string $title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
}
