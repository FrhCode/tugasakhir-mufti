<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Epilepsi extends Model
{
    use HasFactory;
    protected $table = 'epilepsi';
    protected $fillable = ['nama', 'alamat'];
}