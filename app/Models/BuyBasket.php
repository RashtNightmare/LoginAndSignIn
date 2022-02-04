<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyBasket extends Model
{
    use HasFactory;
    protected $fillable=[
        'amount','status','test_id','user_id'
       ];
    public function tests(){
        return $this->belongsTo(Test::class);
    }
    public function users(){
        return $this->belongsTo(User::class);
    }
}
