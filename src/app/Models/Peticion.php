<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peticion extends Model
{
    use HasFactory;
    const UPDATED_AT = null;
    protected  $fillable = ['id_registro', 'fecha'];
}
