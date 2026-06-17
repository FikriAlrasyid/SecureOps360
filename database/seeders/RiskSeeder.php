<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Risk;

class RiskSeeder extends Seeder
{
    public function run(): void
    {
        Risk::insert([
            [
                'risk_name' => 'Unauthorized Access',
                'description' => 'Weak password policy.',
                'likelihood' => 5,
                'impact' => 4,
                'score' => 20,
                'mitigation' => 'Enable MFA',
                'status' => 'Open',
            ],
            [
                'risk_name' => 'Database Failure',
                'description' => 'Storage corruption.',
                'likelihood' => 3,
                'impact' => 5,
                'score' => 15,
                'mitigation' => 'Implement Backup Strategy',
                'status' => 'Mitigated',
            ],
            [
                'risk_name' => 'Phishing Attack',
                'description' => 'Employees click malicious links.',
                'likelihood' => 4,
                'impact' => 3,
                'score' => 12,
                'mitigation' => 'Security Awareness Training',
                'status' => 'Open',
            ],
        ]);
    }
}