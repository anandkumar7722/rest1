<?php
$pass=isset($_GET['pass']) ? $_GET['pass']: "randompassword";
echo(md5($pass));