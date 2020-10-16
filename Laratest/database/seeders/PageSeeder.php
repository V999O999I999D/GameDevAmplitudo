<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        \DB::table('pages')->insert([
//            'username' => Str::random(7),
//            'password' => Str::random(10),
//        ]);

        Page::factory()->times(30)->create();
    }
}
