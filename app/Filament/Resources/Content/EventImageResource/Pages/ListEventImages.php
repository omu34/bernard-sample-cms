<?php

namespace App\Filament\Resources\Content\EventImageResource\Pages;

use App\Filament\Resources\Content\EventImageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEventImages extends ListRecords
{
    protected static string $resource = EventImageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
