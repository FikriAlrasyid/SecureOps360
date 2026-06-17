<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Incident;

class IncidentSeeder extends Seeder
{
    public function run(): void
    {
        Incident::insert([
            [
                'ticket_number' => 'INC001',
                'title' => 'Network Outage',
                'description' => 'Users unable to access ERP system.',
                'priority' => 'Critical',
                'status' => 'Open',
                'reported_by' => 'Operations',
                'incident_date' => '2026-01-15',
            ],
            [
                'ticket_number' => 'INC002',
                'title' => 'Printer Failure',
                'description' => 'Finance printer not responding.',
                'priority' => 'Medium',
                'status' => 'Resolved',
                'reported_by' => 'Finance',
                'incident_date' => '2026-02-05',
            ],
            [
                'ticket_number' => 'INC003',
                'title' => 'Email Service Down',
                'description' => 'Corporate email inaccessible.',
                'priority' => 'High',
                'status' => 'In Progress',
                'reported_by' => 'HR Department',
                'incident_date' => '2026-03-01',
            ],
        ]);
    }
}