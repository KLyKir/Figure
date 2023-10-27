<?php

class Circle extends Figure
{
    public function __construct(public  int $width = 100,public string $color = "",public string $circle = "border-radius: 50%")
    {
        parent::__construct($width, $color);
    }

    public function getArea(){
        return M_PI * pow($this->width, 2);
    }

    public function getPerimeter() {
        return 2 * M_PI * $this->width;
    }

    public function getAttributes() {
        return "width: ".$this->width."; height: ".$this->width."; background-color:".$this->color."; ".$this->circle;
    }
}