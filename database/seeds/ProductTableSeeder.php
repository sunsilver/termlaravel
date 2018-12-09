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
    	$product = new \App\Product([
    		'imagePath' => '/image/item1.png',
    		'title' => 'Earring1',
    		'description' => 'best',
    		'price' => 10
    	]);
    	$product->save();

    	$product = new \App\Product([
    		'imagePath' => '/image/item2.png',
    		'title' => 'Earring2',
    		'description' => 'best',
    		'price' => 10
    	]);
    	$product->save();

    	$product = new \App\Product([
    		'imagePath' => '/image/item3.png',
    		'title' => 'Earring3',
    		'description' => 'best',
    		'price' => 10
    	]);
    	$product->save();
    }
}
