<?php

include_once 'includes/Mic.class.php';
include_once 'includes/User.class.php';
include_once 'includes/Database.class.php';
include_once 'includes/Session.class.php';
include_once 'includes/UserSession.class.php';

global $__site_config;
//Note: Change this path if you run this code outside lab.
//print __DIR__.'/../../../photogramcofig.json';
$__site_config = $__site_config = file_get_contents(__DIR__.'/../../../photogramcofig.json');

Session::start();

function get_config($key, $default=null)
{
    global $__site_config;
    $array = json_decode($__site_config, true);
    if (isset($array[$key])) {
        return $array[$key];
    } else {
        return $default;
    }
}


function load_template($name)
{
    include $_SERVER['DOCUMENT_ROOT'] . "/photogram/_template/$name.php"; //not consistant.
}

function validate_credentials($username, $password)
{
    if ($username == "sibi@selfmade.ninja" and $password == "password") {
        return true;
    } else {
        return false;
    }
}