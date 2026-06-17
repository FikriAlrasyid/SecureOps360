<?php

namespace App\Filament\Resources\Risks\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class RiskForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('risk_name')
                    ->required(),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('likelihood')
                    ->required()
                    ->numeric(),
                TextInput::make('impact')
                    ->required()
                    ->numeric(),
                TextInput::make('score')
                    ->required()
                    ->numeric(),
                Textarea::make('mitigation')
                    ->required()
                    ->columnSpanFull(),
                Select::make('status')
                    ->options(['Open' => 'Open', 'Mitigated' => 'Mitigated', 'Closed' => 'Closed'])
                    ->required(),
            ]);
    }
}
