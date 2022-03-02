<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //`reference_id`, `credit_card_number`, `amount`, `status`, `test_id`, `user_id`, `created_at`, `updated_at
        $payment=[
            [1,'1111111111111111',10000,1,1,1],
            [2,'2222222222222222',20000,2,2,2],
            [3,'3333333333333333',30000,3,3,3]];
            for($i=0;$i < count($payment);$i++){
                $j=0;
                 Payment::query()->create([
                     'reference_id'=> $payment[$i][$j],
                     'credit_card_number'=> $payment[$i][$j+1],
                     'amount'=> $payment[$i][$j+2],
                     'status'=> $payment[$i][$j+3],
                     'test_id'=> $payment[$i][$j+4],
                     'user_id'=> $payment[$i][$j+5]
                    ]); 
         }
         Payment::factory()->count(1)->create();
 
    }
 }
 