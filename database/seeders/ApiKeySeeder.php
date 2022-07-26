<?php

namespace Database\Seeders;

use App\Models\ApiKey;
use Illuminate\Database\Seeder;

class ApiKeySeeder extends Seeder
{
    public function run()
    {
        ApiKey::create(['api_key' => 'ZrmZqtrmbQnlJxPBNftZ' ]);
    }
}
