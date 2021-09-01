<?php

$name = "yuka";

if($name = "yuka"){
     echo "私はあなたの名前です。";
}else{
    echo "あなたの名前ではありません。";
}

?>

<br>

<?php

$total = 0;
echo $total;
?>

<br>
<?php
for ($i = 0; $i <= 10000; $i++){
    $total += $i;
}
echo $total;

?>

<br>

<?php

$fruits = array("orange", "peach", "pair", "banana", "apple");

foreach($fruits as $fruits){
    echo "要素は" . $fruits;
    echo "\n";
}

?>

<br>
<?php

$start = 1; 
   $end = 100; 
 
 
 for($i = $start; $i <= $end; $i++){ 
     if($i % 5 == 0){ 
         echo $i; 
         echo "\n";  
     } 
 } 
 ?> 
