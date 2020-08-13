<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = ['name' => 'pepperoni',
                'price' => '20',
                'description' => 'Pepperoni is a spicy variety of salami of Italian-American origin, as well as the name of a pizza of American origin.',
                'srcOfImage' => '/storage/products/pepperoni.jpg'];
        Product::create($product);

        $product = ['name' => 'neapolitano',
                'price' => '15',
                'description' => 'Neapolitan pizza. The basis for the Neapolitan pizza "Margherita" is prepared from unsaleable yeast dough.',
                'srcOfImage' => '/storage/products/neapolitano.jpg'];
        Product::create($product);

        $product = ['name' => 'margarita',
                'price' => '17',
                'description' => 'Pizza Margarita — the most common classic pizza recipe of Italian cuisine.',
                'srcOfImage' => '/storage/products/margarita.jpg'];
        Product::create($product);

        $product = ['name' => 'crudo',
                'price' => '16',
                'description' => 'Of all the varieties of pizza "Crudo" (Crudo) is the easiest to prepare.',
                'srcOfImage' => '/storage/products/carbonara.jpg'];
        Product::create($product);

        $product = ['name' => 'carbonara',
                'price' => '21',
                'description' => 'Pizza Carbonara is one of the classic recipes for a delicious snack based on yeast dough.',
                'srcOfImage' => '/storage/products/carbonara.jpg'];
        Product::create($product);

        $product = ['name' => '4 cheese',
                'price' => '19',
                'description' => 'Pizza "4 cheeses" is one of the most popular and favorite variations of pizza preparation.',
                'srcOfImage' => '/storage/products/4cheese.jpg'];
        Product::create($product);
    }
}
