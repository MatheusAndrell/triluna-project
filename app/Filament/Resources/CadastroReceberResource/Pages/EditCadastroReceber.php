<?php

namespace App\Filament\Resources\CadastroReceberResource\Pages;

use App\Filament\Resources\CadastroReceberResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCadastroReceber extends EditRecord
{
    protected static string $resource = CadastroReceberResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
