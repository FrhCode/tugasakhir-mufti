<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Knowledge extends Model
{
    use HasFactory;

    //Defining Table Name
    protected $table = 'knowledges';

    // Fillable fields
    protected $fillable = [ 'disease_id', 'symptom_id', 'mb', 'md' ];

    //Primary Key
    public $primaryKey = 'id';


    // One Knowledge belongs to many diseases
    public function diseases() {
        return $this->belongsTo(Disease::class, 'disease_id', 'id');
    }


    // One Knowledge belongs to many diseases
    public function symptoms() {
        return $this->belongsTo(Symptom::class, 'symptom_id', 'id');
    }
}
