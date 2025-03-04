<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    use HasFactory;
    protected $fillable = [
        'age', 'bmi', 'family_history', 'physical_activity',
        'smoking', 'hypertension', 'high_cholesterol', 'risk_score',
    ];

    
}
