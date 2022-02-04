<?php

namespace Database\Seeders;

use App\Models\Wallet;
use Illuminate\Database\Seeder;

class WalletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //`id`, `test_id`, `user_id`, `type`, `action`, `description`, `balance`, `deleted_at`, `created_at`, `updated_at`
        $user=[
            [1,1,'Type1','action1','description1',1],
            [2,2,'Type2','action2','description2',2],
            [3,3,'Type3','action3','description3',3]];
            for($i=0;$i < count($user);$i++){
                $j=0;
                 Wallet::query()->create([
                     'test_id'=> $user[$i][$j],
                     'user_id'=> $user[$i][$j]+1,
                     'type'=> $user[$i][$j]+2,
                     'action'=> $user[$i][$j]+3,
                     'description'=> $user[$i][$j]+4,
                     'balance'=> $user[$i][$j]+5,
                    ]); 
         }
         Wallet::factory()->count(1)->create();
 
    }
 }
 