<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    protected $fillable = [
        'file_name',
    ];
    public function photos(){
        return $this->morphTo(Photo::class,'commentable');
     }
}
