<?php

namespace App\Filament\Resources\Sections\DemonstrationClassResource\Pages;

use App\Filament\Resources\Sections\DemonstrationClassResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDemonstrationClass extends EditRecord
{
    protected static string $resource = DemonstrationClassResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
