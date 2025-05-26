<?php
// src/Controllers/ProductController.php

namespace App\Controllers;

class ProductController
{
    // Dummy data - in a real app, this would come from a Model interacting with the DB
    private $products = [
        1 => ['id' => 1, 'name' => 'Awesome Widget', 'price' => 19.99],
        2 => ['id' => 2, 'name' => 'Super Gadget', 'price' => 29.99],
        3 => ['id' => 3, 'name' => 'Mega Gizmo', 'price' => 39.99],
    ];

    public function listAll()
    {
        $pageTitle = "Our Products";
        $products = $this->products; // Fetch from Model in a real app

        require __DIR__ . '/../Views/products/list.php';
    }

    public function show(int $id)
    {
        if (!isset($this->products[$id])) {
            // Simple "not found" - ideally, trigger the 404 handler or show a specific view
            header("HTTP/1.0 404 Not Found");
            echo "Product not found!";
            exit;
        }

        $product = $this->products[$id]; // Fetch from Model in a real app
        $pageTitle = "Product: " . htmlspecialchars($product['name']);

        require __DIR__ . '/../Views/products/show.php';
    }
}