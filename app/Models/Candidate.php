<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'lastname',
        'date_birth',
        'sexo',
        'email',
        'phone',
        'province',
        'city',
        'comment',
        'cv',
        'photo'
    ];

    public function workDays()
    {
        return $this->belongsToMany(WorkDay::class);
    }

    public function stores()
    {
        return $this->belongsToMany(Store::class);
    }
}
