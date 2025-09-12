<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use SolutionForest\FilamentTranslateField\Forms\Component\Translate;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()->schema([
                    Translate::make()
                        // You can set locales per-form if needed ->locales(['cs', 'en'])
                        ->suffixLocaleLabel()
                        ->schema([
                            TextInput::make('title')
                                ->label('Titulek')
                                ->required(),
                            Textarea::make('perex')
                                ->label('Perex'),
                            RichEditor::make('content')
                                ->label('Obsah')
                                ->required()
                                ->columnSpanFull(),
                        ]),
                    DateTimePicker::make('published_at')
                        ->label('Publikováno')
                        ->required(),
                ])->columnSpanFull(),
            ]);
    }
}
