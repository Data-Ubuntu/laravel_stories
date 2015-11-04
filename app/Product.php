<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Chapter;

class Product extends Model
{
    protected $fillable = ['category_id', 'title','url_rewrite', 'product_id', 'author', 'description', 'image'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function chapters()
    {
        return $this->hasMany(Chapter::class);
    }
}
