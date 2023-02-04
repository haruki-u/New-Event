<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Circle extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    
    protected $fillable=[
        'user_id',
        'name',
        'qrcord_image',
        'contents',
    ];
    
    public function getPaginateByLimit(int $limit_count=5)
    {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
