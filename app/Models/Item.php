<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'condition',
        'is_owned',
        'date_of_purchase',
        'src_name',
        'src_link',
        'img_src'
    ];

    // protected $fillable = [
    //     'name',
    //     'description',
    //     'price',
    //     'condition',
    //     'is_owned',
    //     'date_of_purchase',
    //     'src_name',
    //     'src_link',
    //     'img_src'
    // ];

}
