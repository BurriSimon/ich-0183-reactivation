<?php

namespace App\Controllers;

class HomeController
{
    public function __construct() {}

    public function index()
    {
        echo 'Bonjour from home index';
    }

    public function view()
    {
        echo 'Bonjour from home view avec l\'id ' . $_GET['id'];
    }
}
