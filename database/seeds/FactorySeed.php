<?php

use App\User;
use App\Posts;
use Illuminate\Database\Seeder;

class FactorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 5)->create()->each(function ($user) {
            factory(Posts::class, 5)->create(['user_id'=>$user->id]);
        });
    }
}
