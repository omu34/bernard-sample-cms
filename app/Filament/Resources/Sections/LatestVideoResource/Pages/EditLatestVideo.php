<?php

namespace App\Filament\Resources\Sections\LatestVideoResource\Pages;

use App\Filament\Resources\Sections\LatestVideoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLatestVideo extends EditRecord
{
    protected static string $resource = LatestVideoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
