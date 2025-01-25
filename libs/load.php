<?php

function load_template($name){
    //print(__FILE__);
    //include __DIR__."/../_template/$name.php";
    include $_SERVER['DOCUMENT_ROOT']."/app/_template/$name.php";
    
}
?>