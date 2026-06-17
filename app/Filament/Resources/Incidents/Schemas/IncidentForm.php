<?php

namespace App\Filament\Resources\Incidents\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class IncidentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('asset_id')
                    ->numeric(),
                TextInput::make('ticket_number')
                    ->required(),
                TextInput::make('title')
                    ->required(),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                Select::make('priority')
                    ->options(['Low' => 'Low', 'Medium' => 'Medium', 'High' => 'High', 'Critical' => 'Critical'])
                    ->required(),
                Select::make('status')
                    ->options([
            'Open' => 'Open',
            'In Progress' => 'In progress',
            'Resolved' => 'Resolved',
            'Closed' => 'Closed',
        ])
                    ->required(),
                TextInput::make('reported_by')
                    ->required(),
                DatePicker::make('incident_date')
                    ->required(),
            ]);
    }
}
