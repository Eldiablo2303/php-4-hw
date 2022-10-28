<?php 

$num = 10;

function getnum(){
    $num2 = 200;
    return $num2;
   
}
echo getnum();

// STATIC

function bankdeposit($tk){
   static $totalamount = 500;
    $totalamount += $tk;
    echo $totalamount. ' </br>';
}
bankdeposit(1000);
bankdeposit(1500);
bankdeposit(2000);

//          ARRAY        //
//1


$subject = [
    'phy',
    'che',
    'bio',
    'eng',
    'math'
];
echo "<pre>";
print_r($subject);
echo "</pre>";

//2

$menu = [
    'item1'=>'pizza',
    'item2'=>'chicken fry',
    'item3'=>'nachos',
    'item4'=>'fries',
    'item5'=>'drinks',
];
echo "<pre>";
print_r($menu['item4']);
echo "</pre>";


//3


$menu = [
    'item1'=>'pizza',
    'item2'=>'chicken fry',
    'item3'=>'nachos',
    'item4'=>'fries',
    'item5'=> 'drinks',
];

$menu['item3'] = 'fried rice';

echo "<pre>";
print_r($menu);
echo "</pre>";


///4

$username= [
	'name'=>'jhon',
	'age'=>'25',
	'home town'=>'chittagong',
	'education'=>[
		'ssc'=>'a+',
		'hsc'=>'A',
		'bsc'=>'3.5',
	],




];
echo "<pre>";
echo ($username['education']['bsc']);
echo "</pre>";


//strtoupper

$text='hello world';

echo strtoupper($text);

//ucwords

echo ucwords($text);



//strtolower


$text= "HELLO WORLD";
echo strtolower($text);


//strrev
$texttoprint="im a php programer";
echo strrev($texttoprint);



//str shuffle

echo str_shuffle($texttoprint);

//strpos
$print= "im a programer";
echo strpos($print,'programer');

//str replace

$print=' My name is jhon, im a programer';



echo str_replace('jhon', 'imtiaz', $print);

//password hash
$pass="3775853667";

echo md5($pass);

echo sha1($pass);

echo password_hash($pass,PASSWORD_BCRYPT);




var_dump( password_verify("3775853667",password_hash($pass,PASSWORD_BCRYPT)));

$verify=password_hash($pass,PASSWORD_BCRYPT);
var_dump(password_verify("3775853667",$verify));


?>