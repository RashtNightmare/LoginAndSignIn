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
        $wallet=[
            [1,1,'Type1','action1','description1',1],
            [2,2,'Type2','action2','description2',2],
            [3,3,'Type3','action3','description3',3]];
            for($i=0;$i < count($wallet);$i++){
                $j=0;
                 Wallet::query()->create([
                     'test_id'=> $wallet[$i][$j],
                     'user_id'=> $wallet[$i][$j+1],
                     'type'=> $wallet[$i][$j+2],
                     'action'=> $wallet[$i][$j+3],
                     'description'=> $wallet[$i][$j+4],
                     'balance'=> $wallet[$i][$j+5],
                    ]); 
         }
         Wallet::factory()->count(1)->create();
 
    }
 }
 