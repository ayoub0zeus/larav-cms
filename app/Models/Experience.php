<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    protected $fillable = [ 
        'Exprience_name',
        'Exprience_date',
        'Exprience_company',
    ];
}
