<?php

namespace App\Filament\Resources\Risks\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class RiskInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('risk_name'),
                TextEntry::make('description')
                    ->columnSpanFull(),
                TextEntry::make('likelihood')
                    ->numeric(),
                TextEntry::make('impact')
                    ->numeric(),
                TextEntry::make('score')
                    ->numeric(),
                TextEntry::make('mitigation')
                    ->columnSpanFull(),
                TextEntry::make('status')
                    ->badge(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
