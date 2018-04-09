<?php
include_once 'kettle.php';
$kettle = new kettle;
echo $kettle->getInfo();
echo $kettle->checkbutton(1);
echo $kettle->startWorking(4);