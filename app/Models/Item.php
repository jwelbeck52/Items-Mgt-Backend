<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Item extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

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
