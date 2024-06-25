<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CadastroReceberResource\Pages;
use App\Filament\Resources\CadastroReceberResource\RelationManagers;
use App\Models\CadastroReceber;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CadastroReceberResource extends Resource
{
    protected static ?string $model = CadastroReceber::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

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
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('cadastro_id'),
                Tables\Columns\TextColumn::make('valor'),
                Tables\Columns\TextColumn::make('data_pagamento'),
                Tables\Columns\TextColumn::make('produto_id'),
                Tables\Columns\TextColumn::make('tipo_pagamento'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListCadastroReceber::route('/'),
            'create' => Pages\CreateCadastroReceber::route('/create'),
            'edit' => Pages\EditCadastroReceber::route('/{record}/edit'),
        ];
    }    
}
