<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    
    public function circle()
    {
        return $this->hasOne(Circle::class);
    }
    
    protected $fillable=[
        'user_id',
        'name',
        'grade',
        'sex',
        'faculty',
        'department',
    ];
}
