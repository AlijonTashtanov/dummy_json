<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository
{
    public function saveProducts(array $products): void
    {
        foreach ($products as $product) {
            Product::updateOrCreate(
                ['external_id' => $product['id']],
                [
                    'title'       => $product['title'],
                    'description' => $product['description'],
                    'price'       => $product['price'],
                    'brand'       => $product['brand'],
                    'category'    => $product['category'],
                ]
            );
        }
    }

    public function all()
    {
        return Product::all();
    }
}
