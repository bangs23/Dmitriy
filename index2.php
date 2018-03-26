<?php
// Первое задание
$a = 10;
if ($a % 2 == 0){
    echo 'True';
    echo '<br>';
}
if($a %2 == 1){
    echo 'False';
}
?>

<?php
//Задание №3
$str = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
echo 'Количество буквы А :' . substr_count($str , 'a').'<br>' ;
?>
<?php
//задание 5, как понял так и сделал.
$str1 = 'Hello';
$float1 = 3.5;
$number = 10;
$array = [1,2,3,4,5];
var_dump($str1.'<br>',$float1.'<br>',$number.'<br>',$array);
?>
<?php
$arr = [1, 2, 3, 4, 5];
	foreach ($arr as $elem) {
            echo $elem*$elem;
	}
?>
  <?php
  $openfile = fopen('D:/phpbrain/testgit/DSadovnichiy.txt', 'r');
  echo $openfile;