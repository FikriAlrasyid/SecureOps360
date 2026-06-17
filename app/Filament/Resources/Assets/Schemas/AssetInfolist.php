<?php

namespace App\Filament\Resources\Assets\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class AssetInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('asset_code'),
                TextEntry::make('asset_name'),
                TextEntry::make('category'),
                TextEntry::make('owner'),
                TextEntry::make('location'),
                TextEntry::make('status')
                    ->badge(),
                TextEntry::make('purchase_date')
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
