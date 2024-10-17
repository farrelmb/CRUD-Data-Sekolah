<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dagu extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'mapel',
        'age'
    ];
}
