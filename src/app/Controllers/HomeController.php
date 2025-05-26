<?php
// src/Controllers/HomeController.php

namespace App\Controllers;

class HomeController
{
    public function index()
    {
        $pageTitle = "Welcome Home";
        $message = "You've reached the homepage!";

        // In a real app, you might load a layout here
        // For now, we pass data directly to the view
        require __DIR__ . '/../Views/home.php';
    }
}