<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Personal_access_token extends Model
{
    use HasApiTokens,HasFactory;
    protected $fillable=['tokenable_type', 'tokenable_id','name', 'abilities'];
    protected $hidden = [
        'token',
    ];
}
