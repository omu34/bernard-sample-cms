<?php

namespace App\Filament\Resources\Sections\ShopsResource\Pages;

use App\Filament\Resources\Sections\ShopsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListShops extends ListRecords
{
    protected static string $resource = ShopsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
