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
        $user = factory(App\User::class)->create([
            'email' => 'admin@admin.com'
        ]);

        $user->posts()->saveMany(factory(App\Post::class, 10)->make());
    }
}
