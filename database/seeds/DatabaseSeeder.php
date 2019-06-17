<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::Class, 3)->create()->each(function($u) {
            $u->questions()->saveMany(
                factory(App\Question::class, rand(1, 5))->make()
            );
        });
        
    }
}
