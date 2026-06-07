<?php

namespace App\Filament\Resources\Roles\Schemas;

use App\Models\User;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class RolesForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                ->label('Perfil')
                    ->required(),
                Select::make('guard_name')
                    ->options([User::class => 'Users'])
                    ->label('Nome da entidade')
                    ->required()
            ])->columns(1);
    }
}
