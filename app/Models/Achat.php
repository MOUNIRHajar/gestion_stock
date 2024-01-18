<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achat extends Model
{
    use HasFactory;
    protected $fillable=[
        'ref',
        'qt',
        'fournisseurs_id',
        'date',
        'description',
    ];
}
