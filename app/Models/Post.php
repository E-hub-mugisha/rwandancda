<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'author_id',
        'category_id',
        'image',
        'status',
        'featured',
    ];

    protected $hidden = [
        'author_id',
        'category_id',
        'image',
        'created_at',
        'updated_at'
    ];

    // generate slug from title
    public function getSlugAttribute()
    {
        return Str::slug($this->title);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id');
    }
}
