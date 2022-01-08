<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
        	'shop_id'				=>'1',
        	'category'	        	=>'Rice',
        	'product_name'			=>'Beras Jasmine',
        	'description'	        =>'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.',
        	'price'		        	=>'55.99',
        	'quantity'	        	=>'100',
        	'product_img'			=>'1.png'
        ]);
        Product::create([
        	'shop_id'				=>'2',
        	'category'		        =>'Rice',
        	'product_name'			=>'Beras Super',
        	'description'	        =>'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.',
        	'price'			        =>'23.99',
        	'quantity'		        =>'100',
        	'product_img'			=>'2.png'
        ]);
        Product::create([
        	'shop_id'				=>'3',
        	'category'	        	=>'Rice',
        	'product_name'			=>'Beras Basmathi',
        	'description'	        =>'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.',
        	'price'			        =>'37.99',
        	'quantity'	         	=>'100',
        	'product_img'			=>'3.png'
        ]);
        Product::create([
        	'shop_id'				=>'4',
        	'category'	        	=>'Instant Noodle',
        	'product_name'			=>'Mi Goreng',
        	'description'        	=>'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.',
        	'price'	        		=>'3.39',
        	'quantity'	        	=>'100',
        	'product_img'			=>'4.png'
        ]);
        Product::create([
        	'shop_id'				=>'5',
        	'category'      		=>'Spread',
        	'product_name'			=>'Sapuan Mentega',
        	'description'	        =>'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.',
        	'price'			        =>'14.99',
        	'quantity'		        =>'100',
        	'product_img'			=>'5.png'
        ]);
        Product::create([
        	'shop_id'		 		=>'1',
        	'category'      		=>'Spread',
        	'product_name'			=>'Mentega FarmCows 250gm',
        	'description'	        =>'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.',
        	'price'			        =>'4.79',
        	'quantity'		        =>'100',
        	'product_img'			=>'6.png'
        ]);
        Product::create([
        	'shop_id'				=>'2',
        	'category'      		=>'Snack',
        	'product_name'			=>'Keju Chesdale',
        	'description'	        =>'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.',
        	'price'			        =>'9.89',
        	'quantity'		        =>'100',
        	'product_img'			=>'7.png'
        ]);
        Product::create([
        	'shop_id'				=>'3',
        	'category'      		=>'Milk',
        	'product_name'			=>'Susu',
        	'description'	        =>'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.',
        	'price'			        =>'5.38',
        	'quantity'		        =>'100',
        	'product_img'			=>'8.png'
        ]);
        Product::create([
        	'shop_id'				=>'4',
        	'category'      		=>'Milk',
        	'product_name'			=>'Susu Segar',
        	'description'	        =>'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.',
        	'price'			        =>'13.49',
        	'quantity'		        =>'100',
        	'product_img'			=>'9.png'
        ]);
        Product::create([
        	'shop_id'				=>'5',
        	'category'      		=>'Drink',
        	'product_name'			=>'Vitegen',
        	'description'	        =>'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.',
        	'price'			        =>'3.89',
        	'quantity'		        =>'100',
        	'product_img'			=>'10.png'
        ]);
        Product::create([
        	'shop_id'				=>'1',
        	'category'      		=>'Snack',
        	'product_name'			=>'Munchys Oatcrunch',
        	'description'	        =>'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.',
        	'price'			        =>'7.99',
        	'quantity'		        =>'100',
        	'product_img'			=>'11.png'
        ]);
        Product::create([
        	'shop_id'				=>'2',
        	'category'      		=>'Seafood',
        	'product_name'			=>'Tongkol Putih',
        	'description'	        =>'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.',
        	'price'			        =>'9.00',
        	'quantity'		        =>'100',
        	'product_img'			=>'12.png'
        ]);
        Product::create([
        	'shop_id'				=>'3',
        	'category'      		=>'Seafood',
        	'product_name'			=>'Tenggiri',
        	'description'	        =>'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.',
        	'price'			        =>'30.00',
        	'quantity'		        =>'100',
        	'product_img'			=>'13.png'
        ]);
        Product::create([
        	'shop_id'				=>'4',
        	'category'      		=>'Seafood',
        	'product_name'			=>'Selayang',
        	'description'	        =>'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.',
        	'price'			        =>'9.50',
        	'quantity'		        =>'100',
        	'product_img'			=>'14.png'
        ]);
        Product::create([
        	'shop_id'				=>'5',
        	'category'      		=>'Seafood',
        	'product_name'			=>'Ketam',
        	'description'	        =>'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.',
        	'price'			        =>'31.00',
        	'quantity'		        =>'100',
        	'product_img'			=>'15.png'
        ]);
        Product::create([
        	'shop_id'				=>'1',
        	'category'      		=>'Seafood',
        	'product_name'			=>'Siakap',
        	'description'	        =>'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.',
        	'price'			        =>'16.00',
        	'quantity'		        =>'100',
        	'product_img'			=>'16.png'
        ]);
        Product::create([
        	'shop_id'				=>'2',
        	'category'      		=>'Meat',
        	'product_name'			=>'Chicken',
        	'description'	        =>'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.',
        	'price'			        =>'9.50',
        	'quantity'		        =>'100',
        	'product_img'			=>'17.png'
        ]);
        Product::create([
        	'shop_id'				=>'3',
        	'category'      		=>'Meat',
        	'product_name'			=>'Beef',
        	'description'	        =>'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.',
        	'price'			        =>'34.00',
        	'quantity'		        =>'100',
        	'product_img'			=>'18.png'
        ]);
        Product::create([
        	'shop_id'				=>'4',
        	'category'      		=>'Detergent',
        	'product_name'			=>'Pencuci Pakaia',
        	'description'	        =>'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.',
        	'price'			        =>'11.90',
        	'quantity'		        =>'100',
        	'product_img'			=>'18.png'
        ]);
        Product::create([
        	'shop_id'				=>'5',
        	'category'      		=>'Detergent',
        	'product_name'			=>'Pencuci Pakaian',
        	'description'	        =>'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.',
        	'price'			        =>'8.90',
        	'quantity'		        =>'100',
        	'product_img'			=>'20.png'
        ]);
    }
}
