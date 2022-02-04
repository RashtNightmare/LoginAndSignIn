<?php

namespace Database\Seeders;

use App\Models\BuyBasket;
use Illuminate\Database\Seeder;

class BuyBasketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // `id`, `amount`, `status`, `test_id`, `user_id`, `created_at`, `updated_at` 
        $user=[
            [1,1000],
            [2,2000],
            [3,3000]];
            for($i=0;$i < count($user);$i++){
                $j=0;
                 BuyBasket::query()->create([
                     'user_id'=> $user[$i][$j]
                     ,'amount'=>$user[$i][$j+1]
                    ]); 
         }
         BuyBasket::factory()->count(1)->create();

    }
}
