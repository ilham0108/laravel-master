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
        User::create(['name' => 'Marketing','username'=>'marketing','email'=>'marketing@seeder.id','password'=>'$2y$10$hzjLitq/52eUBQbQdK6UXuwPw1ZauSzKHXBq6BuT//DLTnSIB2lI6','role_id'=>'2']);
        User::create(['name' => 'Billing','username'=>'billing','email'=>'billing@seeder.id','password'=>'$10$NhHuKIM87OHDCYG5w06dWOaxcG5Ltzn7Gs4O2H.jhJWMoZh61BchC','role_id'=>'3']);
    }
}
