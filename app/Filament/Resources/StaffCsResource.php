<?php

namespace App\Filament\Resources;

use App\Models\StaffCs;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\ViewRecord;

class StaffCsResource extends Resource
{
    protected static ?string $model = StaffCs::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('password')
                    ->password()
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('role')
                    ->options([
                        'cs' => 'Customer Service',
                        'admin' => 'Admin',
                    ])
                    ->default('cs')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('role'),
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListStaffCs::route('/'),
            'create' => Pages\CreateStaffCs::route('/create'),
            'edit' => Pages\EditStaffCs::route('/{record}/edit'),
        ];
    }
}
