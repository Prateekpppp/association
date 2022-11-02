<?php 
$req = $_SERVER['REQUEST_URI'];
$route = str_replace('/association','',$req);
$pattern = "/.*\.(?:php)(?:\?\S+)?$/i";
if(preg_match($pattern, $route))
{
    // include('404error.php');
    header("Location: 404");

}
$main_url = 'association';
$admin_name = 'prateek';
$admin_mail = 'prateekpppp4@gmail.com';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Association_Wb</title>
    <link href="/<?=$main_url?>/assets/logo/logo.png" rel="icon" />
    <link rel="stylesheet" href="/<?=$main_url?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/<?=$main_url?>/css/style.css">
    <link rel="stylesheet" href="/<?=$main_url?>/css/navbar.css">
</head>
<body>
    <div id="app" class="d-flex flex-column justify-content-center align-item-center position-relative">
    
    