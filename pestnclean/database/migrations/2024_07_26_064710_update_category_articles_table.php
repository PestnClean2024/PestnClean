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
        Schema::table('category_articles', function (Blueprint $table) {
            // Thay đổi cột 'category_parent' để cho phép NULL
            $table->unsignedBigInteger('category_parent')->nullable()->change();
            
            // Xóa khóa ngoại cũ và thêm khóa ngoại mới nếu cần
            $table->dropForeign(['category_parent']);
            $table->foreign('category_parent')
                ->references('id')
                ->on('category_articles')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('category_articles', function (Blueprint $table) {
            // Khôi phục cột 'category_parent' về trạng thái không cho phép NULL
            $table->unsignedBigInteger('category_parent')->change();
            
            // Xóa khóa ngoại và thêm lại khóa ngoại cũ
            $table->dropForeign(['category_parent']);
            $table->foreign('category_parent')
                ->references('id')
                ->on('category_articles')
                ->onDelete('cascade');
        });
    }
};
