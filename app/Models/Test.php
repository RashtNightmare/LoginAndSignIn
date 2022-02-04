<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;
    protected $fillable =[
        'student_id','teacher_id','score','acceptance_quorum','amount','title','major_id','lesson_id','date','duration','start_time'
    ];
    public function students(){
        return $this->hasMany(User::class);
    }
    public function teachers(){
        return $this->hasMany(User::class);
    }
    public function majors(){
        return $this->hasMany(Major::class);
    }
    public function lessons(){
        return $this->hasMany(Lesson::class);
    }
    public function questions(){
        return $this->hasMany(Question::class);
    }
    public function payments(){
        return $this->hasMany(Payment::class);
    }
    public function wallets(){
        return $this->hasMany(Wallet::class);
    }
    public function buy_baskets(){
        return $this->hasMany(BuyBasket::class);
    }
}
