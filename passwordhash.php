<?php
$time=microtime(true);
$options = [
    'cost' => 7,//7 to 10
];
echo password_hash("rasmuslerdorf", PASSWORD_BCRYPT, $options);
echo "tme take".(microtime(true)-$time)."sec";
//if (password_verify('rasmuslerdorf', '$2y$07$RSV.vQTWtZNDdSo6Fyx9rOnaFSrfnMoBi6siPaiYdnbSccMAyo5OCtme')) {
    //echo 'Password is valid!';
//} else {
   // echo 'Invalid password.';
//}
?>