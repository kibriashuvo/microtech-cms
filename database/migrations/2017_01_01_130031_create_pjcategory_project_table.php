<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePjcategoryProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
        {
        Schema::create('pjcategory_project', function (Blueprint $table) {
           
            $table->increments('id');
            
            $table->integer('pjcategory_id')->unsigned()->index();
            $table->foreign('pjcategory_id')->references('id')->on('pjcategories')->onUpdate('cascade')->onDelete('cascade');

            $table->integer('project_id')->unsigned()->index();
            $table->foreign('project_id')->references('id')->on('projects')->onUpdate('cascade')->onDelete('cascade');
            
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
        Schema::drop('pjcategory_project');
    }

}