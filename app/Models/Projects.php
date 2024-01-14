<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'picture',
        'name',
        'description',
        'has_DarkMode',
        'is_Responsive',
        'created_by',
//        'domain',

    ];
}
