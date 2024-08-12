<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    use HasFactory;
    protected $table = 'quotation_details';

    protected $fillable = [
        'quote_id',
        'name',
        'member_id',
        'age',
        'z1plan1',
        'z1plan2',
        'z1plan3',
        'z1plan4',
        'z2plan1',
        'z2plan2',
        'z2plan3',
        'z2plan4',
        'created_at',
        'updated_at',

    ];
}
