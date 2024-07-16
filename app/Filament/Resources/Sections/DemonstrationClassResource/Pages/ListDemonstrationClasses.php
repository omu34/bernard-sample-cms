<?php

namespace App\Filament\Resources\Sections\DemonstrationClassResource\Pages;

use App\Filament\Resources\Sections\DemonstrationClassResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDemonstrationClasses extends ListRecords
{
    protected static string $resource = DemonstrationClassResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
