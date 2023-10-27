<?php

class Rectangle extends Figure
{
    public function __construct(public int $width = 100, public string $color = "", public int $height = 200)
    {
        parent::__construct($width, $color);
    }

    public function getArea(){
        return $this->width * $this->height;
    }

    public function getPerimeter() {
        return $this->width * 2 + $this->height * 2;
    }

    public function getAttributes() {
        return "width: ".$this->width."; height: ".$this->height."; background-color:".$this->color."; ";
    }
}