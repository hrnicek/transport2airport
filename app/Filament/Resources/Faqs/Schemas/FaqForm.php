<?php

namespace App\Filament\Resources\Faqs\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use SolutionForest\FilamentTranslateField\Forms\Component\Translate;

class FaqForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Translate::make()
                    ->suffixLocaleLabel()
                    ->schema([
                        TextInput::make('question')
                            ->label('Otázka')
                            ->required()
                            ->maxLength(255),

                        Textarea::make('answer')
                            ->label('Odpověď')
                            ->required()
                            ->rows(4),
                    ]),
                Toggle::make('is_active')
                    ->label('Aktivní')
                    ->default(true),
            ]);
    }
}
