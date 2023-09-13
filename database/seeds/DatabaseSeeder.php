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
        $this->call([
            TagSeeder::class,
            GroupSeeder::class,
            CoSeeder::class,
            // ComunitySeeder::class,
        ]);
    }
}
