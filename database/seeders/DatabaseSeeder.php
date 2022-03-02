<?php

namespace Database\Seeders;

use App\Models\User_role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {        $this->call([
        User_RoleSeeder::class,
        UserSeeder::class,
        majorSeeder::class,
        LessonSeeder::class,
        TestSeeder::class,
        BuyBasketSeeder::class,
        QuestionSeeder::class,
        PaymentSeeder::class,
        WalletSeeder::class,
        BalanceSeeder::class,
        TestStudentSeeder::class
    ]);
    }
}
