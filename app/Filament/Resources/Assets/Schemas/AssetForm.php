<?php

namespace App\Filament\Resources\Assets\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class AssetForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('asset_code')
                    ->required(),
                TextInput::make('asset_name')
                    ->required(),
                TextInput::make('category')
                    ->required(),
                TextInput::make('owner')
                    ->required(),
                TextInput::make('location')
                    ->required(),
                Select::make('status')
                    ->options(['Active' => 'Active', 'Maintenance' => 'Maintenance', 'Retired' => 'Retired'])
                    ->required(),
                DatePicker::make('purchase_date')
                    ->required(),
            ]);
    }
}
