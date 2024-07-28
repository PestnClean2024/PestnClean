<?php

namespace App\Models;
use App\Http\Controllers\CategoriesArticlesController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryArticle extends Model
{
    use HasFactory;

    // Đặt tên bảng (nếu khác với quy tắc chuẩn của Laravel)
    protected $table = 'category_articles';

    // Các thuộc tính có thể gán hàng loạt
    protected $fillable = [
        'title', 'description', 'status', 'category_parent', 'image'
    ];

    // Phương thức để lấy danh mục con theo phân cấp
    public static function recursive($categories, $parent = 0, $level = 1, &$listCategory)
    {
        foreach ($categories as $category) {
            if ($category->category_parent == $parent) {
                $category->level = $level;
                $listCategory[] = $category;
                self::recursive($categories, $category->id, $level + 1, $listCategory);
            }
        }
    }
}
