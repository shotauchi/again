$name = 'sho';

if($name == 'sho') {
    echo "私は + $name + です。";
} else {
    echo "私は + $name + ではありません。";
}
echo "\n";

$sum = 0; 

for ($i = 0; $i < 10000; $i++) {
    $sum += $i;
}
echo $sum;
echo "\n";

$fluits = array("apple","orange","pear","grape","banana");

foreach ($fluits as $fluit) {
      echo $fluit;
      echo "\n";
}

//for文の始めの値を定義する
$start = 5;
//for文の終わりの値を定義する 
$end = 100;

for($i = $start; $i < $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}
