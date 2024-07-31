<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CategoriesController;
use App\Models\Category;
use App\Http\Controllers\CategoriesArticlesController;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'content', 'image', 'category_id'];

    public function category(){
        return $this->belongTo(CategoryArticle::class);
    }
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
