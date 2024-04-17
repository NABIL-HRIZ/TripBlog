<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\softDeletes;

use Illuminate\Database\Eloquent\Model;

class TextImonials extends Model
{
    use HasFactory;
    use softDeletes;
    protected $fillable = [
        'name',
        'status',
        'comment',
        'image',
    ];
}
