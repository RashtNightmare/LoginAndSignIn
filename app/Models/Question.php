<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable =[
        'text','option1','option2','option3','option4','true_answer','test_id'
    ];
    public function tests(){
        return $this->belongsTo(Test::class);
    }
}
