<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('subtitle')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                TextInput::make('user_id')
                    ->required()
                    ->numeric(),
                DateTimePicker::make('published_at')
                    ->required(),
            ]);
    }
}
