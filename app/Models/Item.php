<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'desccription',
        'price',
        'status',
        'src_name',
        'src_link',
        'img_src'
    ];

}
