<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StaffCsResource\Pages;
use App\Filament\Resources\StaffCsResource\RelationManagers;
use App\Models\StaffCs;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StaffCsResource extends Resource
{
    protected static ?string $model = StaffCs::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
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
