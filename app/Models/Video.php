<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
    ];
    public function videos(){
        return $this->morphTo(Video::class,'commentable');
     }
}
