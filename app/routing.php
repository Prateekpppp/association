<?php

class Routing 
{
    public function __construct($page,$js = 0)
    {
        include('includes/header.php');
        include('includes/navbar.php');
        include('pages/'.$page.'.php');
        include('includes/footbar.php');
        include('includes/footer.php');
    }
}