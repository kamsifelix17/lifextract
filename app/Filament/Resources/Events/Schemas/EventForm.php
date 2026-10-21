<?php

namespace App\Filament\Resources\Events\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class EventForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (\Filament\Forms\Set $set, ?string $state) => $set('slug', Str::slug($state ?? ''))),
                TextInput::make('slug')
                    ->required(),
                TextInput::make('location')
                    ->default('Lagos, Nigeria')
                    ->required(),
                DateTimePicker::make('event_date')
                    ->required(),
                FileUpload::make('featured_image')
                    ->image()
                    ->directory('events')
                    ->columnSpanFull(),
                Textarea::make('description')
                    ->required()
                    ->rows(4)
                    ->columnSpanFull(),
                Toggle::make('is_published')
                    ->default(true),
            ]);
    }
}