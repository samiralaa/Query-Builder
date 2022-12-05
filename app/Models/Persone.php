<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persone extends Model
{
    use HasFactory;
    protected $fillable=['name','phone','address','age','size','created_at','updated_at'];
}
