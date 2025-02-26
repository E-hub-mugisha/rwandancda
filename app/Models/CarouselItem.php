<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class CarouselItem extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'image_path',
        'description',
        'link',
    ];

}
