<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'category_id', 'main_image','content'];

    public function sizes()
    {
        return $this->hasMany(Size::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public static function recursive($categories, $parents=0, $level=1, &$listCategory){
        if(count($categories) > 0){
            foreach($categories as $key => $value){
                if($value->category_parent == $parents){
                    $value ->level = $level;

                    $listCategory[] = $value;
                    unset($categories[$key]);
                    $parent = $value->id;
                    self::recursive($categories, $parent, $level + 1, $listCategory);
                }
            }
        }
    }
}
