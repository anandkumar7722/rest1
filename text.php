<?php
//error_reporting(E_ALL);
//ini_set('display_error','1');

$p="1/17/25";
printf("hello php restart %s<br>",$p);
print("the today 9.2pm".$p."i want to hacker<br>");
echo("it my startup name"." i can");
$trtue=true;//not case senti
$fafalse=false;//not case senti
$stringf="TRUE";
print("trtrue:".$trtue."<br>\n");
print("trtrue:".$fafalse."<br>\n");
print(gettype($fafalse)."<br>\n");
print(gettype($trtue)."<br>\n");
print(gettype($stringf)."<br>\n");
print('$varop<br>');
if (null==0 and false==0 and false==0){
    print("null==0 and false==0 and false==0<br>");
}
function foo(){
    print("the function call <br>");
}
foo();
if(1==(int)true){
    print("1==1");
}
else{
    print("flase");
}
$int1=34;
$int11=34; 
$int2=034;//octal0--7
print("<br>".$int2);
print(gettype($int2)."<br>");
print(gettype($int1)."<br>");
$int3=0xff;//hexa decmail
print(gettype($int3)."<br>");
print($int3."<br>");
$int4=0b11010100101001;//binary
print(gettype($int4)."<br>");
print($int1."<br>");
print($int3+$int4."<br>");
$fl=2.44000043;
printf("%.3f<br>",$fl);
$a=print("you a add %f <br>");
print($a);
print($a);
$f2=4.4e9;
print($f2."<br>");
$f3=4.4e-4;
print($f3."<br>");
print($int1."<br>");
unset($int1);
print($int1."<br>");
//arithmetics
$sum=1+7;
$diff=3-1;
$mul=6*8;
$div=8/2;
$mol=88%21;
print($sum."<br>");
print($diff."<br>");
print($mul."<br>");
print($div."<br>");
print($mol."<br>");

//short
$num1=0;
print($num1."<br>");
$num1=$num+1;
print($num1."<br>");
$num1++;
print($num1."<br>");
print($num1."<br>");
$num1+=1;
print($num1."<br>");
//mul string
$now=<<< 'ANAND'
i <br>
love <br>
computer <br>
ANAND;
print($now);
$now1=<<< AN
i <br> $sum
love <br>
computer <br>
AN;
print($now1);
print(htmlentities($now1));
$now11=<<< "ANA"
i <br> $sum
love <br>
computer <br>
ANA;
print($now11."<br>");
print("master"."<br>");
echo 99**66 ."<br>";
echo 98*2;
?>
<?php
print("20/1/25"."is was delete!!");
print("it redoing ");
//arrays
print("22/1/25");
print("reback");
$arr=[1,2,3,4,5];
//    0 1 2 3 4
echo "<br>".$arr[0];
echo "<br>".$arr[1];
echo "<br>".$arr[2];
echo "<br>".$arr[3];
echo "<br>".$arr[4];
//reverse acces elements
/*
echo "<br>".$arr[-1];
echo "<br>".$arr[-2];
echo "<br>".$arr[-3];
echo "<br>".$arr[-4];
*/
echo"<hr>";
for ($i=0;$i<4;$i++){
    printf("<br>"."%d",$arr[$i]);
}
//asscoiative arrays
$arr1=[1,3.4,true,"hello",$arr[0],012,0xff];
print_r($arr1);
//gettype
for ($i=0;$i<8;$i++){
    printf("<br>".gettype($arr1[$i]));
}
//count
for ($i=0;$i<=count($arr1);$i++){
    printf("<br>"."%d",$arr[$i]);
}
print("<br>".array_rand($arr));
print("<br>".array_chunk($arr,1));
$arr2=[
    "one"=>1,
    "one0"=>2,
    "one1"=>3,
    "one3"=>0b01,
    "one4"=>0xff,
    "one4"=>"5.5",
    "one6"=>"keyss"
];
print($arr2["one"]);
print($arr2["one0"]);
print($arr2["one1"]);
//replace function
print_r($arr2);
$filps=print_r(array_flip($arr2));
echo"<hr>";
function testfunc($key,$value){
    print("$key:$value<br>");
}
print_r(array_walk($arr2,'testfunc'));
print_r(array_key_exists('hello',$arr2));

if(array_key_exists('one1',$arr2)){
    print("<br>"."is exist");
}
else{
    print("is  not exist");
}
if(array_key_exists('one0',$arr2)){
    print("<br>"."is exist");
}
else{
    print("is  not exist"."<br>");
}
?><pre><?
print_r($arr2);
print_r(array_chunk($arr2,3,true));
print_r(array_chunk($arr2,3));
print_r(array_chunk($arr2,3));
$arre=[11,23,44,55,66,7,7];
print_r(array_pad($arre,13,87));
print_r(array_pad($arre,9,87));
print_r(array_pad($arre,9,"hello"));
$arrp=[
    'apple'=>[
        'red',
        'green'
    ],
    'organ'=>[
        'fruit',
        'green organ'
    ]
    ];
print_r(array_replace_recursive($arrp,[
    'apple'=>[
        'good for healt'
    ]
]));
print_r(array_replace_recursive($arrp,[
    'organ'=>[
        'good for healt',
        'is the organ'
    ]
]));
print_r(array_sum($arr));
print_r($arr);
print_r(array_pop($arr));
print_r(array_push($arr,5,5,7,7,9,4,5,8,9,4));
print_r($arr);
print_r(array_unique($arr));
print_r(array_push($arr,5,5,7,7,9,4,5,8,9,4.435,446,754665));
print_r(array_unique($arr));
?></pre>