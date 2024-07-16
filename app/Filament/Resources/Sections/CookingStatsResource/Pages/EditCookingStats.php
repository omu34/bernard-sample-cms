<?php

namespace App\Filament\Resources\Sections\CookingStatsResource\Pages;

use App\Filament\Resources\Sections\CookingStatsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCookingStats extends EditRecord
{
    protected static string $resource = CookingStatsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
