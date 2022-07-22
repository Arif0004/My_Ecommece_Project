<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    protected $guarded=[];

    function getRouteKeyName(){
        return 'slug';
    }

    public function sub_category():HasMany
    {
        return $this->hasMany(Subcategory::class,'category_id','id');
    }

    public function sub_categories(): HasMany
    {
        return $this->hasMany(SubCategory::class, 'category_id', 'id');
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
