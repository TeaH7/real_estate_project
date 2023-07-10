<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = [
            'Publish',
            'Draft',
            'Archived'
        ];
        foreach ($statuses as $status) {
            Status::create([
                "name" => $status,
            ]);
        }
    }
}
