<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{


    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
        
            $table->increments('id');
            $table->string('name');
            $table->text('details');
            $table->string('slug');
            $table->integer('pdcategory_id');
            $table->string('path');
            $table->timestamps();
        
        });
    }



    public function down()
    {
        
        Schema::drop("products");
    
    }



}