<?php

namespace App\Filament\Resources\Compliances\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ComplianceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('control_code')
                    ->required(),
                TextInput::make('control_name')
                    ->required(),
                TextInput::make('owner')
                    ->required(),
                Select::make('status')
                    ->options(['Compliant' => 'Compliant', 'Partial' => 'Partial', 'Non-Compliant' => 'Non  compliant'])
                    ->required(),
                DatePicker::make('review_date')
                    ->required(),
            ]);
    }
}
