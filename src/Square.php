<?php

class Square extends Figure
{
    public function __construct(public int $width = 100,public string $color = "")
    {
        parent::__construct($width, $color);
    }

    public function getArea() {
        return $this->width * $this->width;
    }

    public function getPerimeter() {
        return $this->width * 4;
    }

    public function getAttributes() {
        return "width: ".$this->width."; height: ".$this->width."; background-color:".$this->color;
    }
}