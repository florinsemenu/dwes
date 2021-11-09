<?php
class HomeController
{
    function __construct()
    {
        echo "HomeController -> construct <br>";
    }
    public function home()
    {
        require "app/views/home.php";
    }
}
