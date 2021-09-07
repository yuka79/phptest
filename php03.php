<?php
function nibai($number){
    $result = $number * 2;
    return $result;
}
echo nibai(5) . "\n";

?>

<br>

<?php
function tasu($a, $b){
    $result = $a + $b;
    return $result;
}

echo tasu(79, 21) . "\n";

?>

<br>

<?php
function kakeru($arr){
    $result = 1;
    foreach ($arr as $resul){
        $result *= $resul;
    }
    return $result;
}
echo kakeru(array(1, 3, 5, 7, 9)) . "\n";

?>

<br>

<?php
 function max_array($arr) {
     $max_number = $arr[0];
     foreach($arr as $a) {
         if($max_number < $a)
             $max_number = $a;
         }
         return $max_number;

     }
 echo max_array(array(1,3,5,7,9)). "\n";

 ?>

 <br>

 <?php
$text = '<p>今日は寒い</p><!-- Comment --> <a href="#fragment">日に日に暑くなるらしいけど</a>';
echo strip_tags($text);
echo "\n";
?>

<br>

<?php
$favorite = array('doll', 'milk', 'skateboard');
 
array_push($favorite, 'game', 'cleaning');
 
print_r($favorite);

?>

<br>

<?php

$array1 = [1, 2, 3];
$array2 = [4, 5];
$result = array_merge($array1, $array2);
print_r($result);
?>

<br>

<?php
$nextWeek = time() + (7 * 24 * 60 * 60);
                
echo 'Now:       '. date('Y-m-d') ."\n";
echo 'Next Week: '. date('Y-m-d', $nextWeek) ."\n";
?>

<br>

<?php

date_default_timezone_set('UTC');

echo "July 9, 1998 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));
?>

<br>

<?php
echo date('l \t\h\e jS');
?>
