<?php

class Square extends Figure
{
    public function __construct(protected int $width = 100,protected string $color = "")
    {
        parent::__construct($width, $color);
    }

    public function getArea() {
        return round($this->width * $this->width);
    }

    public function getPerimeter() {
        return round($this->width * 4);
    }

    public function getAttributes() {
        return "width: ".$this->width."; height: ".$this->width."; background-color:".$this->color;
    }
}