<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestStudent extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_id','test_id','score','status','paid','canceled'
    ];
    public function students(){
        return $this->belongsTo(User::class);
    }
    public function tests(){
        return $this->belongsTo(Test::class);
    }
}
