<?php

namespace App\Filament\Resources\Sections\LatestGalleryResource\Pages;

use App\Filament\Resources\Sections\LatestGalleryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLatestGalleries extends ListRecords
{
    protected static string $resource = LatestGalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
