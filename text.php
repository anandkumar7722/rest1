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