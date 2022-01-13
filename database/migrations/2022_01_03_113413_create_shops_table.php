<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->String('shop_name');
            $table->String('tel_no');
            $table->String('shop_img')->nullable();
            $table->String('address1')->nullable();
            $table->String('address2')->nullable();
            $table->String('city')->nullable();
            $table->String('state')->nullable();
            $table->String('postcode')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shops');
    }
}
