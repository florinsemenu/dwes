<?php
class HomeController
{
    function __construct()
    {
        echo "HomeController -> construct <br>";
    }
    public function home()
    {
        require "views/home.php";
    }
}
