<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'photo',
        'skills',
        'candidate_id',
    ];

    public function candidate(){
        return $this->belongsTo(Candidate::class);
    }
}
