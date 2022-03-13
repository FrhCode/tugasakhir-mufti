<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    use HasFactory;

    //Defining Table Name
    protected $table = 'diseases';

    // Fillable fields
    protected $fillable = [ 'id', 'name', 'info', 'advice' ];

    //Primary Key
    public $primaryKey = 'id';

    public $incrementing = false;

    // One Disease has many knowledges
    public function knowledges() {
        return $this->hasMany(Knowledge::class, 'disease_id', 'id');
    }
}
