<?php

namespace App\Modules\Blog\Database\Seeds;

use App\Modules\Blog\Models\BlogEntry;
use Illuminate\Database\Seeder;

class BlogEntriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        BlogEntry::create([
            'code' => 'new-entry',
            'title' => 'New Entry',
            'content' => 'new entry',
            'is_active' => true,
        ]);
    }
}
