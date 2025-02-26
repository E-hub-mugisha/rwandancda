<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Category;

class Post extends Model
{
    use HasFactory;
    protected $fillable =  ['title', 'image', 'status', 'body', 'slug', 'featured', 'image'];

    public function authorId()
    {
        return $this->belongsTo(User::class,'User');
    }

    

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
