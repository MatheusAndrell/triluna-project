<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CadastroResource\Pages;
use App\Filament\Resources\CadastroResource\RelationManagers;
use App\Models\Cadastro;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CadastroResource extends Resource
{
    protected static ?string $model = Cadastro::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nome')->label('Nome'),
                Forms\Components\Textarea::make('email')->label('Email'),
                Forms\Components\Textarea::make('endereco')->label('Endereço'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('nome'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('endereco'),
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
            'index' => Pages\ListCadastros::route('/'),
            'create' => Pages\CreateCadastro::route('/create'),
            'edit' => Pages\EditCadastro::route('/{record}/edit'),
        ];
    }    
}
