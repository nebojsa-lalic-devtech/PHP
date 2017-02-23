<?php

namespace classes\products;

class ProductOne
{
    private $some_text;

    /**
     * ProductOne constructor.
     * @param $some_text
     */
    public function __construct($some_text)
    {
        $this->some_text = $some_text;
    }

    /**
     * @return mixed
     */
    public function getSomeText()
    {
        return $this->some_text;
    }

    /**
     * @param mixed $some_text
     */
    public function setSomeText($some_text)
    {
        $this->some_text = $some_text;
    }
}