<?php
session_start();

require_once(dirname(__FILE__) . '/config/config.php');

function getCurrentUrl()
{
    return "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
}

function getCurrentTime()
{
    return date("Y-m-d H:i:s");
}

function getCurrentDate()
{
    return date("Y-m-d");
}

function getCurrentTimeWithoutDate()
{
    return date("H:i:s");
}

function getCurrentUserIp()
{
    if (!empty($_SERVER['HTTP_CF_CONNECTING_IP'])) {
        return $_SERVER['HTTP_CF_CONNECTING_IP'];
    }else{
        return $_SERVER['REMOTE_ADDR'];
    }
}

function getConfiguration($key)
{
    global $config;
    return $config[$key];
}

function getCurrentUserId()
{
    return !empty($_SESSION["user"]["id"]) ? $_SESSION["user"]["id"] : null;
}

function getCurrentUserName()
{
    return $_SESSION["user"]["first_name"] . " " . $_SESSION["user"]["last_name"];
}

function getCurrentUsrEmail()
{
    return $_SESSION["user"]["email"];
}

?>