<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RandNum extends Model
{

    protected $table = 'rand_nums';

    protected $fillable = 
    [
        'id',
        'rand_nums_value',
        'quantity',
        'created_by'
    ];

    public $timestamps = false;

}