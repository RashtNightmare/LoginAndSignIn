<?php

namespace Database\Seeders;

use App\Models\User_role;
use Illuminate\Database\Seeder;

class User_RoleSeeder extends Seeder
{  /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run()
   {  //`id`, `name`, `created_at`, `updated_at`
       $role=[
           ['name1'],
           ['name2'],
           ['name3']];
           for($i=0;$i < count($role);$i++){
               $j=0;
                User_role::query()->create([
                    'name'=> $role[$i][$j],
                   ]); 
        }
        User_role::factory()->count(1)->create();

   }
}
