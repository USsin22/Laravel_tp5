<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function Home()
    {
        $products = [
            [
                'id' => 1,
                'title' => 'HP16D0195NF',
                'price' => 'Intel i5 12th Gen',
                'image' => '1.jpg',
                'description' => 'Laptop polyvalent conçu pour la bureautique et multimédia.'
            ],
            [
                'id' => 2,
                'title' => 'HP14424U3EA',
                'price' => 'Intel i3 11th Gen',
                'image' => '2.jpg',
                'description' => 'Portable léger adapté aux tâches quotidiennes.'
            ],
            [
                'id' => 3,
                'title' => 'HUA6901443442959',
                'price' => 'Ryzen 5 4600H',
                'image' => '3.jpg',
                'description' => 'Bonne performance pour bureautique montage léger.'
            ],
            [
                'id' => 4,
                'title' => 'NXATHEF002',
                'price' => 'Intel i7 10th Gen',
                'image' => '4.jpg',
                'description' => 'Portable professionnel avec écran Full HD.'
            ],
        ];





        return view("prodacts", compact('products'));
    }

    public function show($id)
    {
        $products = [
            ['id' => 1, 'title' => 'HP16D0195NF',      'price' => 'Intel i5 12th Gen', 'image' => '1.jpg', 'description' => 'Laptop polyvalent conçu pour la bureautique et multimédia.'],
            ['id' => 2, 'title' => 'HP14424U3EA',       'price' => 'Intel i3 11th Gen', 'image' => '2.jpg', 'description' => 'Portable léger adapté aux tâches quotidiennes.'],
            ['id' => 3, 'title' => 'HUA6901443442959',  'price' => 'Ryzen 5 4600H',    'image' => '3.jpg', 'description' => 'Bonne performance pour bureautique montage léger.'],
            ['id' => 4, 'title' => 'NXATHEF002',        'price' => 'Intel i7 10th Gen', 'image' => '4.jpg', 'description' => 'Portable professionnel avec écran Full HD.'],
        ];

        $product = null;
        foreach ($products as $p) {
            if ($p['id'] == $id) {
                $product = $p;
            }
        }

        return view('product-show', compact('product'));
    }
}
