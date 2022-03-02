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
        $buy_basket=[
            [1000,1,1,1],
            [2000,2,2,2],
            [3000,3,3,3]];
            for($i=0;$i < count($buy_basket);$i++){
                $j=0;
                 BuyBasket::query()->create([
                     'amount'=> $buy_basket[$i][$j]
                     ,'status'=>$buy_basket[$i][$j+1]
                     ,'test_id'=>$buy_basket[$i][$j+2]
                     ,'user_id'=>$buy_basket[$i][$j+3]

                    ]); 
         }
         BuyBasket::factory()->count(1)->create();

    }
}
