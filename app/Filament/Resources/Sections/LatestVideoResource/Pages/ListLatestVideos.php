<?php

namespace App\Filament\Resources\Sections\LatestVideoResource\Pages;

use App\Filament\Resources\Sections\LatestVideoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLatestVideos extends ListRecords
{
    protected static string $resource = LatestVideoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
