<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facade\DB;
use App\Models\Church;

class ChurchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Church::create([
            'kanisa_code' => 'KMB001',
            'jina_la_kanisa' => 'Kanisa la Mungu Baba',

        ]);
    }
}
