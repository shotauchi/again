//課題01

$a = 3;
$b = 7;

echo $a + $b;

//課題02

$array_manth = ["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"];

echo $array_manth[8];
echo "\n";
//03

$hello = "Hello";
$name  = "sho";
$world = "‘s World!";

echo  $hello,$name,$world;

//04

$tech_boost = "tech";
$tech_boost .= " boost";


echo $tech_boost;
echo "\n";

//05

$calendar = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月",
];

// 12月を表示する
echo $calender["December"];
