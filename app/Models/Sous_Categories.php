<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sous_Categories extends Model
{
    use HasFactory;
    protected $fillable=[
        'categories_id',
        'name',
        'description',
    ];
}
