<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          
    $passwords=[12345678,123456789,1234567890];    
     //`name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`
   $user=[
    ["Student","student@gmail.com",null,Hash::make($passwords[0]),null],
    ["Teacher","teacher@gmail.com",null,Hash::make($passwords[0]),null],
    ["Admin","admin@gmail.com",null,Hash::make($passwords[0]),null]];    
    for($i=0;$i < count($user);$i++){
        $j=0;
         User::query()->create([
             'name'=> $user[$i][$j]
             ,'email'=>$user[$i][$j+1]
             ,'email_verified_at'=>$user[$i][$j+2]
             ,'password'=>$user[$i][$j+3]
             ,'remember_token'=>$user[$i][$j+4]
           ]); 
 }
 User::factory()->count(1)->create();
 
 
     }
 }
 