<?php

namespace App\Modules\Blog\Database\Seeds;

use Illuminate\Database\Seeder;

class BlogDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->call(BlogEntriesTableSeeder::class);
    }
}
