<?php
// echo 'test';
// die();
require_once('app/routing.php');
require('app/functions.php');

// public $functions = new Functions();
// require('backend/db.php');
$req = $_SERVER['REQUEST_URI'];
$route = str_replace('/association','',$req);
$pattern = "/.*\.(?:php)(?:\?\S+)?$/i";
if($route)
{
    if(preg_match($pattern, $route))
    {
        $templete = new Routing('404');
        // header("Location: 404");
        
    } 
    elseif($route == '/') 
    {
        $templete = new Routing('home');
        
    }
    elseif($route == '/index' || $route == '/home') 
    {
        header("Location: /association");
    }
    elseif($route == '/members' || preg_match("/members\/[0-9a-z]/i",$route))
    {
            $templete = new Routing('members');
    }
    elseif($route == '/member_profile' || preg_match("/member_profile\/[0-9a-z]/i",$route))
    {
        // echo 'test1'; die();
            $templete = new Routing('member_profile');
    }
    elseif(file_exists('pages/'.$route.'.php'))
    {
        $templete = new Routing($route);
    }
    else 
    {
        $templete = new Routing('404');
    }
}
// $templete = new Routing($page);