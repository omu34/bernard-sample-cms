<?php

namespace App\Filament\Resources\Sections\ContactSubBannerResource\Pages;

use App\Filament\Resources\Sections\ContactSubBannerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListContactSubBanners extends ListRecords
{
    protected static string $resource = ContactSubBannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
