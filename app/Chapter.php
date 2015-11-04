<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Chapter extends Model
{
    protected $fillable = ['chapter_name', 'url_rewrite', 'product_id', 'description', 'infomation', 'image'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
