<?php

namespace App\Http;

use Illuminate\Database\Eloquent\Model;

class Task extends Model{

    protected $fillable =[
        'name',
        'discription',
        'finish_date'
    ];
}