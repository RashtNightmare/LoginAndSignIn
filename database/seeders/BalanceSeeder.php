<?php

namespace Database\Seeders;

use App\Models\Balance;
use Illuminate\Database\Seeder;

class BalanceSeeder extends Seeder
{
   /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //'user_id','amount'
        
        $user=[
            [1,1000],
            [2,2000],
            [3,3000]];
            for($i=0;$i < count($user);$i++){
                $j=0;
                 Balance::query()->create([
                     'user_id'=> $user[$i][$j]
                     ,'amount'=>$user[$i][$j+1]
                    ]); 
         }
         Balance::factory()->count(1)->create();

    }
}
