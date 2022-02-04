<?php

namespace Database\Seeders;

use App\Models\Major;
use Illuminate\Database\Seeder;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { //`id`, `name`, `created_at`, `updated_at`
        $user=[
           ['NameMajor1'],
           ['NameMajor2'],
           ['NameMajor3']];
           for($i=0;$i < count($user);$i++){
               $j=0;
                Major::query()->create([
                    'name'=> $user[$i][$j]
                   ]); 
        }
        Major::factory()->count(1)->create();

   }
}
