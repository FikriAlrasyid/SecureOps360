<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Compliance;

class ComplianceSeeder extends Seeder
{
    public function run(): void
    {
        Compliance::insert([
            [
                'control_code' => 'A.5.1',
                'control_name' => 'Information Security Policy',
                'owner' => 'Security Team',
                'status' => 'Compliant',
                'review_date' => '2026-12-31',
            ],
            [
                'control_code' => 'A.8.2',
                'control_name' => 'Asset Classification',
                'owner' => 'IT Operations',
                'status' => 'Partial',
                'review_date' => '2026-11-30',
            ],
            [
                'control_code' => 'A.9.4',
                'control_name' => 'Access Control',
                'owner' => 'Infrastructure Team',
                'status' => 'Non-Compliant',
                'review_date' => '2026-10-15',
            ],
        ]);
    }
}