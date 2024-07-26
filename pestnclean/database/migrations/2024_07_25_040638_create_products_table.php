<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
        {   
            Schema::create('products', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->text('description');
                $table->text('content');
                $table->integer('price');
                $table->integer('category_id')->unsigned();
                $table->string('main_image')->nullable();
                $table->timestamps();
                
                $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
