<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  //`id`, `name`, `created_at`, `updated_at`
        $user=[
            ['name1'],
            ['name2'],
            ['name3']];
            for($i=0;$i < count($user);$i++){
                $j=0;
                 Role::query()->create([
                     'name'=> $user[$i][$j],
                    ]); 
         }
         Role::factory()->count(1)->create();
 
    }
 }
 