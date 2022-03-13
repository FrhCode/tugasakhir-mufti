<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skripsi extends Model
{
    use HasFactory;
    //Defining Table Name
    protected $table = 'skripsi';

    // Fillable fields
    protected $fillable = ['now', 'alamat'];

    //Primary Key
    public $primaryKey = 'id';
}