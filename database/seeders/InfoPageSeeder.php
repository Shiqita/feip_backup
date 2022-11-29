<?php

namespace Database\Seeders;

use App\Models\InfoPage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InfoPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InfoPage::query()->delete();
        InfoPage::factory(random_int(20, 30))->create();
    }
}
