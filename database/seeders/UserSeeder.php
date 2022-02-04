<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          
     //protected $fillable = ['name','email','identity_card','national_code','mobile','username','password','avatar'
   //  ,'role_id','major_id'];
   $user=[
    ["Student","student@gmail.com","1111111111111111","1111111111","09111111111","StUsername","111111",'1',1,1],
    ["Teacher","teacher@gmail.com","2222222222222222","2222222222","09222222222","TcUsername","222222",'2',2,2],
    ["Admin","admin@gmail.com",    "3333333333333333","3333333333","09333333333","AdUsername","333333",'3',3,3]];    
    for($i=0;$i < count($user);$i++){
        $j=0;
         User::query()->create([
             'name'=> $user[$i][$j]
             ,'email'=>$user[$i][$j+1]
             ,'identity_card'=>$user[$i][$j+2]
             ,'national_code'=>$user[$i][$j+3]
             ,'mobile'=>$user[$i][$j+4]
             ,'username'=>$user[$i][$j+5]
             ,'password'=>$user[$i][$j+6]
             ,'avatar'=>$user[$i][$j+7]
             ,'role_id'=>$user[$i][$j+8]
             ,'major_id'=>$user[$i][$j+9]
           ]); 
 }
 User::factory()->count(1)->create();
 
 
     }
 }
 