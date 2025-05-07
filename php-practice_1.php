<?php

// Q1 変数と文字列
$name = '「佐藤貴峰」';

 echo "私の名前は $name です";

// Q2 四則演算
$num = 5 * 4; 
 echo $num . "\n"; 

$result = $num / 2;  
 echo $result . "\n"; 

// Q3 日付操作
date_default_timezone_set("Asia/Tokyo");
$now = date("Y-m-d H:i:s");  
 echo "現在時刻は " . $now . " です。";

// Q4 条件分岐-1 if文
$device = "windows";

if($device == "windows"){
  echo "使用OSは、windowsです。";
}
else{
if($device == "mac"){
  echo"使用OSは、macです。";
}
else{
  echo"どちらでもありません。";
}
}

// Q5 条件分岐-2 三項演算子
$age = 27;
  if($age > 18){
    echo'成人です。';
  }elseif($age<17){
    echo'未成年です。';
  }

// Q6 配列
$kanto = ["東京都", "神奈川県", "埼玉県", "栃木県", "千葉県", "茨城県", "群馬県"];
echo $kanto[3] . "と" . $kanto[4] . "は関東地方の都道府県です。";

// Q7 連想配列-1
$kanto = ["東京都" => "新宿区","神奈川県" => "横浜市","埼玉県" => "さいたま市","千葉県" => "千葉市","茨城県" => "水戸市","栃木県" => "宇都宮市","群馬県" => "前橋市"];

foreach ($kanto as $capital) {
  echo $capital . "\n";
}

// Q8 連想配列-2
$kanto = ["東京都" => "新宿区","神奈川県" => "横浜市","埼玉県" => "さいたま市","千葉県" => "千葉市","茨城県" => "水戸市","栃木県" => "宇都宮市","群馬県" => "前橋市"];

foreach ($kanto as $todoufuken => $capital) {
  if ($capital != "") {
    echo $capital . "\n";
  }
}

// Q9 連想配列-3
$japan = ["東京都" => "新宿区","神奈川県" => "横浜市","埼玉県" => "さいたま市","千葉県" => "千葉市","茨城県" => "水戸市","栃木県" => "宇都宮市","群馬県" => "前橋市","三重県" => "津市","沖縄県" => "那覇市"];
$kanto = ["東京都", "神奈川県", "埼玉県", "千葉県", "茨城県", "栃木県", "群馬県"];

foreach ($japan as $kanto => $capital) {
  if ($kanto == "東京都" || $kanto == "神奈川県" || $kanto == "埼玉県" || $kanto == "千葉県" || $kanto == "茨城県" || $kanto == "栃木県" || $kanto == "群馬県") {
    echo $kanto . "の県庁所在地は、" . $capital . "です。\n";
  } 
  else {
    echo $kanto . "は関東地方ではありません。\n";
  }
}

// Q10 関数-1
function hello($name) {
  return $name . "さん、こんにちは。";
}

echo hello("佐藤") . "\n";
echo hello("貴峰") . "\n";

// Q11 関数-2
$price = 1000;
calcTaxInPrice($price);

function calcTaxInPrice($price) {
  $TaxInPrice = $price * 1.10;
    echo $price . "円の商品の税込価格は" . $TaxInPrice . "円です。";
}

// Q12 関数とif文
function distinguishNum($num) {
  if ($num % 2 == 0) {
      return $num . "は偶数です。";
  } 
  else {
      return $num . "は奇数です。";
  }
}
echo distinguishNum(11) . "\n";
echo distinguishNum(24) . "\n";

// Q13 関数とswitch文
function evaluateGrade($judge) {
  switch ($judge) {
    case 'A':
    case 'B':
      return "合格です。";
    case 'C':
      return "合格ですが追加課題があります。";
    case 'D':
      return "不合格です。";
    default:
      return "判定不明です。講師に問い合わせてください。";
  }
}
echo evaluateGrade('A') . "\n";
echo evaluateGrade('E') . "\n";

?>