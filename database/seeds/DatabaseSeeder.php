<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class)->create()->each(function ($user) {
            $user->posts()->saveMany(factory(App\Post::class, 10)->make());
        });
    }
}
