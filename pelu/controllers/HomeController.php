<?php
class HomeController
{
    function __construct()
    {
        echo "HomeController -> construct <br>";
    }
    public function home()
    {
        echo "esto es el echo de home";
        require "views/home.php";
    }
}
