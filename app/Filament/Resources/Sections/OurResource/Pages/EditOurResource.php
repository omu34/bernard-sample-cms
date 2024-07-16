<?php

namespace App\Filament\Resources\Sections\OurResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\Sections\OurResource;

class EditOurResource extends EditRecord
{
    protected static string $resource = OurResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
