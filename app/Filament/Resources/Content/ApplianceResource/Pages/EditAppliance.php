<?php

namespace App\Filament\Resources\Content\ApplianceResource\Pages;

use App\Filament\Resources\Content\ApplianceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAppliance extends EditRecord
{
    protected static string $resource = ApplianceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
