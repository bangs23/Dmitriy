<?php
require_once 'Figure/classtest.php';
require_once 'Figure/files.php';
echo $Figure1->getFigure1Info();
echo 'Периметр прямоугольника  =' . $Figure1->getPerimeter();
echo $Figure2->getFigure2Info();
echo 'Диаметр круга =' . $Figure2->getDiameter();
echo $Figure3->getFigure2Info();
echo 'Периметр квадрата =' . $Figure3->getPerimeterSquare();