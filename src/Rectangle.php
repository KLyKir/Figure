<?php

class Rectangle extends Figure
{
    public function __construct(protected int $width = 100, protected string $color = "", private int $height = 200)
    {
        parent::__construct($width, $color);
    }

    public function getArea(){
        return round($this->width * $this->height, 2);
    }

    public function getPerimeter() {
        return round($this->width * 2 + $this->height * 2, 2);
    }

    public function getAttributes() {
        return "width: ".$this->width."; height: ".$this->height."; background-color:".$this->color."; ";
    }
}