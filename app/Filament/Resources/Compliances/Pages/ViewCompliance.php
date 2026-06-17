<?php

namespace App\Filament\Resources\Compliances\Pages;

use App\Filament\Resources\Compliances\ComplianceResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewCompliance extends ViewRecord
{
    protected static string $resource = ComplianceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
