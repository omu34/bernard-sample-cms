<?php

namespace App\Filament\Resources\Content\PikaResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\Content\PikaResource;

class ListPikaResources extends ListRecords
{
    protected static string $resource = PikaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
