<?php

class Circle extends Figure
{
    public function __construct(protected int $width = 100,protected string $color = "",private string $circle = "border-radius: 50%")
    {
        parent::__construct($width, $color);
    }

    public function getArea(){
        return round(M_PI * pow($this->width, 2), 2);
    }

    public function getPerimeter() {
        return round(2 * M_PI * $this->width, 2);
    }

    public function getAttributes() {
        return "width: ".$this->width."; height: ".$this->width."; background-color:".$this->color."; ".$this->circle;
    }
}