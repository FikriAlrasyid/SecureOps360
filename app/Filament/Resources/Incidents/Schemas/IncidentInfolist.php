<?php

namespace App\Filament\Resources\Incidents\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class IncidentInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('asset_id')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('ticket_number'),
                TextEntry::make('title'),
                TextEntry::make('description')
                    ->columnSpanFull(),
                TextEntry::make('priority')
                    ->badge(),
                TextEntry::make('status')
                    ->badge(),
                TextEntry::make('reported_by'),
                TextEntry::make('incident_date')
                    ->date(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
