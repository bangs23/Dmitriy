<?php

class kettle
{
   protected $color;
   protected $volumr;
   protected $model;
   protected $button;
   
   public function __construct()
    {
        $this->model = "MyFirstKettle";
        $this->color = "Steel";
        $this->volume = 3;
    }
  
 public function getInfo()
    {
        echo sprintf(
 'Имя чайника %s,<br> Цвет %s, <br>Объем в литрах =%d',
            $this->model,
            $this->color,
            $this->volume);
    }
       
  public function checkbutton()
  {
if($this->button === 1){
echo  'Включено';
}
else 
    { if ($this->button === 0){
    echo 'Выключено';
  }}}
public function startWorking($setVolume)
{
   if ($setVolume <= $this->volume && $setVolume <= 0){
       echo 'Мало воды';
       //хочу написать, что если больше 3 то выдать ошибку, а как не знаю
   }else {throw new Exception('Воды больше чем объем чайника');
}}}