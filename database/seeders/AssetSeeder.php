<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Asset;

class AssetSeeder extends Seeder
{
    public function run(): void
    {
        Asset::insert([
            [
                'asset_code' => 'AST001',
                'asset_name' => 'Dell Latitude 5440',
                'category' => 'Laptop',
                'owner' => 'IT Department',
                'location' => 'Head Office',
                'status' => 'Active',
                'purchase_date' => '2025-01-15',
            ],
            [
                'asset_code' => 'AST002',
                'asset_name' => 'Cisco Catalyst 9200',
                'category' => 'Network',
                'owner' => 'Infrastructure Team',
                'location' => 'Server Room',
                'status' => 'Active',
                'purchase_date' => '2024-10-10',
            ],
            [
                'asset_code' => 'AST003',
                'asset_name' => 'HP LaserJet M404',
                'category' => 'Printer',
                'owner' => 'Finance Department',
                'location' => 'Finance Office',
                'status' => 'Maintenance',
                'purchase_date' => '2023-08-01',
            ],
            [
                'asset_code' => 'AST004',
                'asset_name' => 'Fortigate 100F',
                'category' => 'Firewall',
                'owner' => 'Security Team',
                'location' => 'Data Center',
                'status' => 'Active',
                'purchase_date' => '2024-05-10',
            ],
        ]);
    }
}
