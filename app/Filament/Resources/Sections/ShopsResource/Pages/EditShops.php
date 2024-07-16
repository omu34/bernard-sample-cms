<?php

namespace App\Filament\Resources\Sections\ShopsResource\Pages;

use App\Filament\Resources\Sections\ShopsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditShops extends EditRecord
{
    protected static string $resource = ShopsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
