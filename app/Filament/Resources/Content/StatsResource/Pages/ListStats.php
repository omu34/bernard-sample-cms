<?php

namespace App\Filament\Resources\Content\StatsResource\Pages;

use App\Filament\Resources\Content\StatsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStats extends ListRecords
{
    protected static string $resource = StatsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
