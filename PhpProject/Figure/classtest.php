<?php
require_once 'Figure/files.php';
class Figure
{
    public $name;
    public  $type;
    public  $side1;
    public  $side2;
    public $side3;
    public  $diameter;
   public  $radius;
   public function getFigure1Info()
    {
        echo sprintf(
            '<hr>Имя %s,<br>  Тип %s,<br> Сторона1 = %d,<br> Сторона2 = %d<hr>',
            $this->name,
            $this->type,
            $this->side1,
            $this->side2
          
        );
    }
     public function getFigure2Info()
    {
        echo sprintf(
            '<hr>Имя %s,<br>  Тип %s,<br>Радиус = %d<hr>',
            $this->name,
            $this->type,
            $this->radius
        );
    }
     public function getFigure3Info()
    {
        echo sprintf(
            '<hr>Имя %s,<br>  Тип %s, <br>Сторона квадрата = %d<hr>',
            $this->name,
            $this->type,
            $this->side3
        );
    }
   public function getDiameter() {
        $diameter = $this->radius * 2;
        return $diameter;
}
 public function getPerimeter() {
      $sum = ($this->side1 + $this->side2) *2;
      return $sum;
    }
    public function getPerimeterSquare() {
      $sum = $this->side3 * 4;
      return $sum;
    }
   }