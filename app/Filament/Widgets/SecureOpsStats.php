<?php

namespace App\Filament\Widgets;

use App\Models\Asset;
use App\Models\Incident;
use App\Models\Risk;
use App\Models\Compliance;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class SecureOpsStats extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Assets', Asset::count()),

            Stat::make('Incidents', Incident::count()),

            Stat::make(
                'Open Risks',
                Risk::where('status', 'Open')->count()
            ),

            Stat::make(
                'Compliance Controls',
                Compliance::count()
            ),
        ];
    }
}