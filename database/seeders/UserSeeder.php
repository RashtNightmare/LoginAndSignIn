<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=[
            ['Ali Moytamed','ali_motamed111@gmai.com','pass123'],
            ['Ali Moytamed','ali_motamed222@gmai.com','pass123'],
            ['Ali Moytamed','ali_motamed333@gmai.com','pass123']];    
            for ($i=0;$i < count($user);$i++) {
                $j=0;
                User::query()->create([
                    'name'=> $user[$i][$j],
                    'email'=>$user[$i][$j+1],
                    'password'=>$user[$i][$j+2],
                    // 'user_id'=>$user[$i][$j+3],
                    // 'created_at'=>$user[$i][$j],
                    // 'updated_at'=>$user[$i][$j],
    
                   ]); 
                   User::factory()->count(1)->create();

                }}}
