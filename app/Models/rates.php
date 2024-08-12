<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rates extends Model
{
    use HasFactory;

    protected $table = 'rates';

    protected $fillable = [
        'zone',
        'cover',
        'age',
        'plan1',
        'plan2',
        'plan3',
        'plan4',
    ];
}
