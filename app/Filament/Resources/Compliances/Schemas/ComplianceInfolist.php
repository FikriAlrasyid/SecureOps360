<?php

namespace App\Filament\Resources\Compliances\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ComplianceInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('control_code'),
                TextEntry::make('control_name'),
                TextEntry::make('owner'),
                TextEntry::make('status')
                    ->badge(),
                TextEntry::make('review_date')
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
