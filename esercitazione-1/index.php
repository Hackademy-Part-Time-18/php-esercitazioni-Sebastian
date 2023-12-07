<?php

$int= 10;
$float= 5.2;
$str= "esempio";
$bool=true;

/* transformo le variabili in costanti */

const INT=10;
const FLOAT=5.2;
const STR= "esempio-2";
const BOOL= false;

echo "--- tipi di variabili --- \n";
echo gettype($int)."\n";
echo gettype($float)."\n";
echo gettype($str)."\n";
echo gettype($bool)."\n";

echo "\n--- stampo le costanti --- \n";
echo INT."\n";
echo FLOAT."\n";
echo STR."\n";
echo BOOL."\n";

/* traccia 2 */


$text1 = "Marco";
$text2 = "hai";
$text3 = "sete";
$text4 = "?";
$text5 = "Perché";
$text6 = '$text2';
$text7 = 'bevuto';
$text8 = "tutto";

echo "\n --- traccia 2 --- \n";
echo "$text1 $text2 $text3 $text4 $text5 $text2 $text7 $text8";

/* traccia 3 */


$words1 = [
  'una',
  67,
  'vita',
  'colle',
  'mi',
  'rosso',
  [
    'oscura',
    'era',
    89,
    [
      'mezzo',
      [
        'cammin',
        'Nel',
		'del',
        [
          'selva',
          'la',
          [
            'via',
            'una',
            true,
          ]
        ],
      ]
    ],
    'ritrovai',
    'per'
  ],
  'diritta'
];

$words2 = [
  'elemento1' => 25.89,
  'elemento2' => 'nostra',
  'elemento3' => [
    'Virgilio',
    'smarrita',
    'ché'
  ]
];

echo "\n--- traccia 3 ---\n";
echo($words1[6][3][1][1]." ".$words1[6][3][0] ." ".$words1[6][3][1][2]." ".$words1[6][3][1][0]." di ". $words2["elemento2"]." ".$words1[2]." mi ".$words1[6][4]." ".$words1[6][5]." ".$words1[6][3][1][3][2][1]." ".$words1[6][3][1][3][0]." ".$words1[6][0]." ".$words2["elemento3"][2]." ".$words1[6][3][1][3][1]." ".$words1[7]." ".$words1[6][3][1][3][2][0]." ".$words1[6][1]." ".$words2["elemento3"][1]) ;


$a = false;
$b = true;
$c = true;
$d = false;

$ab = !$a && $b; //true
$ad = $a || $d; // false
$bc = $b && $c; //True
$bd = !$b || $d; //False
$cb = $c && $b; //True
$ca = !$c || $a; //false

$cabc = !$ca || $bc;//true
$cbbc = $cb || $bc;//true
$bdab = $bd && !$ab;//false
$bccb = $bc && !$cb; //false
$bcab = !$bc || !$ab; //false
$bcca = $bc && !$ca ;//true


$cbbccabc = $cbbc || $cabc;//true
$bccbbdab = !$bccb && !$bdab;//true
$cabcbcca = !$cabc && $bcca; //false
$bdabbccb = $bdab && $bccb;//false
$cbbcbccb = !$cbbc || $bccb;//false
$cabcbccb = $cabc || !$bccb;//true


echo "\n --- traccia extra 2 --- \n";

var_dump($cbbccabc); //True
var_dump($bccbbdab); //True
var_dump($cabcbcca); //False
var_dump($bdabbccb); //False
var_dump($cbbcbccb); //False
var_dump($cabcbccb); //True