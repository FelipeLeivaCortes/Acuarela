<?php

namespace Database\Seeders;

use App\Http\Controllers\ReasonController;
use App\Models\Reason;
use Illuminate\Database\Seeder;

class ReasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Reason::REASONS as $value) {
            Reason::create([
                'name' => $value,
            ]);
        }
    }
}
