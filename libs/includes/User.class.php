<?php

class User
{
    private $conn;
    //private static $salt="plmokjn";
    public static function signup($user, $pass, $email, $phone)
    {
        $options = [
            'cost' => 7,//7 to 10
        ];
        $pass = password_hash($pass, PASSWORD_BCRYPT, $options);
        //$pass=md5(strrev(md5($pass)).User::$salt);// security throught obsecurity
        $conn = Database::getConnection();
        $sql = "INSERT INTO `auth` (`username`, `password`, `email`, `phone`, `active`)
        VALUES ('$user', '$pass', '$email', '$phone', '1');";
        $error = false;
        if ($conn->query($sql) === true) {
            $error = false;
        } else {
            //printf("new connecting estimation");
            // echo "Error: " . $sql . "<br>" . $conn->error;
            $error = $conn->error;
        }
    
        // $conn->close();
        return $error;
    }
    public static function login($user,$pass){
        //$pass=md5(strrev(md5($pass)).User::$salt);
        $query="SELECT * FROM `auth` WHERE `username` = '$user'";
        $conn=Database::getConnection();
        $result=$conn->query($query);
        if($result->num_rows == 1){
            $row=$result->fetch_assoc();
            //return $row;
            //if($row['password']==$pass){
            if(password_verify($pass,$row['password'])){
                return $row;
            }else{
                return false;
            }
        }else{
            return false;
        }
        
        }
    public function __construct($username)
    {
        $this->conn=Database::getConnection();
        $this->conn->query();
        //$this->$user = $username;
    }
    public function authenticate(){

    }
    public function setBio(){

    }
    public function getBio(){

    }
    public function setAvav(){

    }
    public function getAvav(){

    }
}