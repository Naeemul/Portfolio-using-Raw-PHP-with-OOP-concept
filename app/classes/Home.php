<?php

namespace App\classes;

class Home
{
    public function index()
    {
        header("Location: route.php?page=home");
    }
}