<?php

namespace App\Filament\Resources\Sections\HeaderNavigationResource\Pages;

use App\Filament\Resources\Sections\HeaderNavigationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHeaderNavigations extends ListRecords
{
    protected static string $resource = HeaderNavigationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
