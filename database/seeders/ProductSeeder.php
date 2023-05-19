<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Added Start
        $products = [
            [
                'name' => 'Mie Ayam',
                'image' => 'https://waroengpakeddybonsir.com/wp-content/uploads/2021/04/mie-ayam-500x500.png',
                'price' => 20.000,
                'description' => 'Mie Ayam Gebetan'
            ],
            [
                'name' => 'Spaghetti',
                'image' => 'https://pngimg.com/uploads/spaghetti/spaghetti_PNG110.png',
                'price' => 50.000,
                'description' => 'Spaghetti BDP'
            ],
            [
                'name' => 'Nasi Goreng',
                'image' => 'https://www.esteler77.com/assets/uploads/products-images-nasi-goreng-77-0.png',
                'price' => 70.000,
                'description' => 'Nasi Goreng Gila'
            ],
            [
                'name' => 'Cilok',
                'image' => 'https://seleramartini.com/wp-content/uploads/2021/04/Cilok-Food-8b.png',
                'price' => 30.000,
                'description' => 'Cilok Big 4'
            ],
            [
                'name' => 'Boci',
                'image' => 'https://seleramartini.com/wp-content/uploads/2021/04/Boci-Ori-8b.png',
                'price' => 30.000,
                'description' => 'Boci dahsyat'
            ],
            [
                'name' => 'Ayam Penyet',
                'image' => 'https://ayampresident.com/wp-content/uploads/2021/05/AYAM-PENYET.png',
                'price' => 30.000,
                'description' => 'Ayam Penyet pakdeh'
            ],
            [
                'name' => 'Fire Chicken',
                'image' => 'https://images.pngnice.com/download/2007/Fried-Chicken-Wings-PNG-File.png',
                'price' => 30.000,
                'description' => 'Hot Chicken'
            ],
            [
                'name' => 'Bakso',
                'image' => 'https://clipground.com/images/bakso-png-18.png',
                'price' => 30.000,
                'description' => 'Bakso enak'
            ],
        ];

        foreach ($products as $key => $value) {
            Product::create($value);
        }
        //Added End
    }
}
