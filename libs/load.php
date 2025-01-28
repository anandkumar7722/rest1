<?php

function load_template($name){
    //print(__FILE__);
    //include __DIR__."/../_template/$name.php";
    include $_SERVER['DOCUMENT_ROOT']."/app/_template/$name.php";
    
}
function validate_credentials($username,$password){
    
    if($username=="Anand123@gmail.com" and $password=="password"){
        return true;
    }else{
        return false;
    }
}
function signup($user,$phone,$email_address,$pass){
    $servername = $db_server;
$username = $db_username;
$password = $db_password;
$dbname = $anandnb_nb;//1:21:04

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
    print("<br>connection estimation");
}

$sql = "INSERT INTO `auth` (`username`, `password`, `email`, `phone`, `blocked`, `active`)
VALUES ('$user', '$pass', '$email_address', '$phone', '0', '1');";
//$result=false;
if ($conn->query($sql) === TRUE) {
  echo "\n<br>New record created successfully";
  $result=true;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  $result=false;
  print($conn->error);
  
}

$conn->close();
return $result;
}
?>