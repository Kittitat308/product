<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Inertia\Inertia;

class ProductController extends Controller
{
    private $products = [
        ['id' => 1, 'name' => 'Laptop', 'description' => 'High-performance laptop', 'price' => 25000 , 'image' => 'images/laptop.jpg'],
        ['id' => 2, 'name' => 'Smartphone', 'description' => 'Latest smartphone with great features', 'price' => 8000 , 'image' => 'images/smartphone.jpg'],
        ['id' => 3, 'name' => 'Tablet', 'description' => 'Portable tablet for everyday use', 'price' => 15000 , 'image' => 'images/tablet.jpg'],
        ['id' => 4, 'name' => 'Car', 'description' => 'High-performance car', 'price' => 1000000 , 'image' => 'images/car.jpg'],
        ['id' => 5, 'name' => 'Computer', 'description' => 'High-performance computer', 'price' => 50000 , 'image' => 'images/computer.jpg'],
        ['id' => 6, 'name' => 'TV', 'description' => 'TV for everyday use', 'price' => 20000 , 'image' => 'images/tv.jpg'],

    ];

    public function index()
    {
        return Inertia::render('Products/Index', ['products' => $this->products]);
    }

    public function show($id)
    {
        $product = collect($this->products)->firstWhere('id', $id);

        if (!$product) {
            abort(404, 'Product not found');
        }

        return Inertia::render('Products/Show', ['product' => $product]);
    }
}
