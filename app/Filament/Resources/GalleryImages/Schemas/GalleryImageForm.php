<?php

namespace App\Filament\Resources\GalleryImages\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class GalleryImageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title'),
                Select::make('category')
                    ->options([
                        'foundation' => 'Foundation Outreaches',
                        'health' => 'Health Screenings',
                        'youth' => 'Youth Bootcamps',
                        'podcast' => 'TalksWithMrDee Studio',
                    ])
                    ->default('foundation')
                    ->required(),
                FileUpload::make('image_path')
                    ->image()
                    ->required()
                    ->directory('gallery')
                    ->columnSpanFull(),
                Textarea::make('caption')
                    ->rows(3)
                    ->columnSpanFull(),
            ]);
    }
}