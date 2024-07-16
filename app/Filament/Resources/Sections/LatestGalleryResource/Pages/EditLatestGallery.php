<?php

namespace App\Filament\Resources\Sections\LatestGalleryResource\Pages;

use App\Filament\Resources\Sections\LatestGalleryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLatestGallery extends EditRecord
{
    protected static string $resource = LatestGalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
