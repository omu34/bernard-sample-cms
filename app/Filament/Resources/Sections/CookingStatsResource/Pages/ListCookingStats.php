<?php

namespace App\Filament\Resources\Sections\CookingStatsResource\Pages;

use App\Filament\Resources\Sections\CookingStatsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCookingStats extends ListRecords
{
    protected static string $resource = CookingStatsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
