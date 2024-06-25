<?php

namespace App\Filament\Resources\CadastroReceberResource\Pages;

use App\Filament\Resources\CadastroReceberResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCadastroReceber extends ListRecords
{
    protected static string $resource = CadastroReceberResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
