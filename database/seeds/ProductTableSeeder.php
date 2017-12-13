<?php

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
        $product= new \App\Product([

        	'imagePath'=> 'http://www.qtrac.eu/py3bookm.png',
        	'title' =>'Python',
        	'description' => 'Some quick example text to build on the card title and make up the bulk of the card content.',
        	'price' => 60

        ]);
        $product->save();
    
    $product= new \App\Product([

        	'imagePath'=> 'http://blog.mugunthkumar.com/wp-content/uploads/iOS-5-Programming-.png',
        	'title' =>'IOS Programming 5',
        	'description' => 'Some quick example text to build on the card title and make up the bulk of the card content.',
        	'price' => 80

        ]);
        $product->save();
    
    $product= new \App\Product([

        	'imagePath'=> 'https://www.packtpub.com/sites/default/files/5623-final.png',
        	'title' =>'Mac Master',
        	'description' => 'Some quick example text to build on the card title and make up the bulk of the card content.',
        	'price' => 160

        ]);
        $product->save();
    
    $product= new \App\Product([

        	'imagePath'=> 'http://www.qtrac.eu/py3bookm.png',
        	'title' =>'Python',
        	'description' => 'Some quick example text to build on the card title and make up the bulk of the card content.',
        	'price' => 60

        ]);
        $product->save();
    
    $product= new \App\Product([

        	'imagePath'=> 'https://qph.ec.quoracdn.net/main-qimg-ad681d292c53c8a1935731232c514a08-c',
        	'title' =>'Programming With C',
        	'description' => 'Some quick example text to build on the card title and make up the bulk of the card content.',
        	'price' => 60

        ]);
        $product->save();
    
    $product= new \App\Product([

        	'imagePath'=> 'https://images-na.ssl-images-amazon.com/images/I/51b5ByiFZjL._SX379_BO1,204,203,200_.jpg',
        	'title' =>'Killer Programming',
        	'description' => 'Some quick example text to build on the card title and make up the bulk of the card content.',
        	'price' => 100

        ]);
        $product->save();

         $product= new \App\Product([

        	'imagePath'=> 'https://i.pinimg.com/originals/71/4c/25/714c2535e7f86300ff4dbe7a20372a39.jpg',
        	'title' =>'Demon Killer Programming',
        	'description' => 'Some quick example text to build on the card title and make up the bulk of the card content.',
        	'price' => 120

        ]);
        $product->save();
    }
}
