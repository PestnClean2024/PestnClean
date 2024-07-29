<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryArticlesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('category_articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->boolean('status');
            $table->unsignedBigInteger('category_parent')->default(0);
            $table->string('image')->nullable();
            $table->timestamps();

            // Tạo chỉ mục cho category_parent để tối ưu hóa các truy vấn
            $table->foreign('category_parent')->references('id')->on('category_articles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('category_articles');
    }
}
