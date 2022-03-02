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
        $major=[
           ['NameMajor1'],
           ['NameMajor2'],
           ['NameMajor3']];
           for($i=0;$i < count($major);$i++){
               $j=0;
                Major::query()->create([
                    'name'=> $major[$i][$j]
                   ]); 
        }
        Major::factory()->count(1)->create();

   }
}
