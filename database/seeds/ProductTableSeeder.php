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
        $product = ['name' => 'Pepperoni',
                'price' => '20',
                'description' => 'Pepperoni is a spicy variety of salami of Italian-American origin, as well as the name of a pizza of American origin.',
                'src_of_image' => '/images/products/pepperoni.jpg'];
        Product::create($product);

        $product = ['name' => 'Neapolitano',
                'price' => '15',
                'description' => 'Neapolitan pizza. The basis for the Neapolitan pizza "Margherita" is prepared from unsaleable yeast dough.',
                'src_of_image' => '/images/products/neapolitano.jpg'];
        Product::create($product);

        $product = ['name' => 'Margarita',
                'price' => '17',
                'description' => 'Pizza Margarita — the most common classic pizza recipe of Italian cuisine.',
                'src_of_image' => '/images/products/margarita.jpg'];
        Product::create($product);

        $product = ['name' => 'Crudo',
                'price' => '16',
                'description' => 'Of all the varieties of pizza "Crudo" (Crudo) is the easiest to prepare.',
                'src_of_image' => '/images/products/carbonara.jpg'];
        Product::create($product);

        $product = ['name' => 'Carbonara',
                'price' => '21',
                'description' => 'Pizza Carbonara is one of the classic recipes for a delicious snack based on yeast dough.',
                'src_of_image' => '/images/products/carbonara.jpg'];
        Product::create($product);

        $product = ['name' => '4 cheese',
                'price' => '19',
                'description' => 'Pizza "4 cheeses" is one of the most popular and favorite variations of pizza preparation.',
                'src_of_image' => '/images/products/4cheese.jpg'];
        Product::create($product);
        
        $product = ['name' => 'Americano',
                'price' => '25',
                'description' => 'Americano is a high-calorie pizza, for those who love delicious pizza and are not afraid to gain extra weight.',
                'src_of_image' => '/images/products/americano.jpg'];
        Product::create($product);

        $product = ['name' => 'Pizza with prosciutto and mushrooms',
                'price' => '27',
                'description' => 'This is not a pizza, its more like a cheese and mushroom cookie. Crusts do not bend, it breaks.',
                'src_of_image' => '/images/products/prosciutto.jpg'];
        Product::create($product);

        $product = ['name' => 'Pizza with tuna',
                'price' => '30',
                'description' => 'Canned tuna fish pizza.',
                'src_of_image' => '/images/products/tuna.jpg'];
        Product::create($product);
    }
}
