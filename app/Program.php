<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Program extends Model
{
    public function engagement()
    {
        return $this->belongsTo(Engagement::class, 'title');
    }
}
