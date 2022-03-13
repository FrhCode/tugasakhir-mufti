<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Symptom extends Model
{
    use HasFactory;

    //Defining Table Name
    protected $table = 'symptoms';

    // Fillable fields
    protected $fillable = [ 'id', 'name', 'info' ];

    //Primary Key
    public $primaryKey = 'id';

    public $incrementing = false;

    // One Symptom has many knowledges
    public function knowledges() {
        return $this->hasMany(Knowledge::class, 'symptom_id', 'id');
    }
}
