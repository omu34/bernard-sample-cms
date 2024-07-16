<?php

namespace App\Filament\Resources\Sections\OurResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\Sections\OurResource;

class ListOurResources extends ListRecords
{
    protected static string $resource = OurResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
