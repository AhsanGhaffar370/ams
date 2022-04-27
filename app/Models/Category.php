<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'name',
        'image',
        // 'parent_id'
    ];

    // Each category may have one parent
    // public function parent() {
    //     return $this->hasOne(static::class, 'id', 'parent_id');
    // }

    // // Each category may have multiple children
    // public function children() {
    //     return $this->hasMany(static::class, 'parent_id');
    // }

    public function products() {
        return $this->hasMany(Product::class, "category_id"); // category_id is a fk column inside products table. 
    }

}
