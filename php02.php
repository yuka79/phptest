<?php

$name = "hoshiyuka";

if($name = "hoshiyuka"){
     echo "私はhoshiyukaです。";
}else{
    echo "あなたの名前ではありません。";
}

?>

<br>

<?php

$total = 0;

for ($i = 0; $i <= 10000; $i++){
    $total += $i;
}
echo $total;

?>

<br>

<?php

$fruits = array("orange", "peach", "pair", "banana", "apple");

foreach($fruits as $fruit){
    echo "要素は" . $fruit;
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
