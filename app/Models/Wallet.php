<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;
    protected $fillable = [
        'test_id','user_id','type','action','description','balance'
    ];
    public function tests(){
        return $this->belongsTo(Test::class);
    }
    public function users(){
        return $this->belongsTo(User::class);
    }
}
