<?php

abstract class Shape {

    /**
     * @var $length
     */
    protected $length;

    /**
     * @var $width
     */
    protected $width;

    abstract public function getArea ();
}

class Square extends Shape {
    public function getArea () {
        // TODO: Implement getArea() method.
    }
}