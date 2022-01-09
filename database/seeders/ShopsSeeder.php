<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Shop;

class ShopsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shop::create([
        	'shop_name'		    	=>'Kwek',
        	'address'	            =>'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.',
        	'tel_no'		        =>'08294280',
        	'shop_img'		    	=>'1.png'
        ]);
        Shop::create([
        	'shop_name'	     		=>'Happy Mart',
        	'address'	            =>'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.',
        	'tel_no'		        =>'08294280',
        	'shop_img'		    	=>'2.png'
        ]);
        Shop::create([
        	'shop_name'		    	=>'Ria Gerai',
        	'address'	            =>'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.',
        	'tel_no'		        =>'08294280',
        	'shop_img'		    	=>'3.png'
        ]);
        Shop::create([
        	'shop_name'		    	=>'Gerai Kita',
        	'address'           	=>'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.',
            'tel_no'		        =>'08294280',
        	'shop_img'		    	=>'4.png'
        ]);
        Shop::create([
        	'shop_name'		    	=>'My shop',
        	'address'	            =>'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.',
        	'tel_no'			    =>'08294280',
        	'shop_img'		    	=>'5.png'
        ]); 
        Shop::create([
        	'shop_name'		    	=>'Sapuan Mentega FarmCows 250gm',
        	'address'	            =>'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.',
        	'tel_no'    	        =>'08294280',
        	'shop_img'		    	=>'6.png'
        ]);
        Shop::create([
        	'shop_name'		    	=>'1malaysia shop',
        	'address'	            =>'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.',
        	'tel_no'	            =>'08294280',
        	'shop_img'		    	=>'7.png'
        ]);
        Shop::create([
        	'shop_name'		     	=>'Gerai Aneka',
        	'address'	            =>'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.',
        	'tel_no'    	        =>'08294280',
        	'shop_img'		    	=>'8.png'
        ]);
        Shop::create([
        	'shop_name'		    	=>'Mydin',
        	'address'	            =>'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.',
        	'tel_no'		        =>'08294280',
        	'shop_img'		    	=>'9.png'
        ]); 
        Shop::create([
        	'shop_name'		    	=>'Chong store',
        	'address'	            =>'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.',
        	'tel_no'    	        =>'08294280',
        	'shop_img'		     	=>'10.png'
        ]);
    }
}
