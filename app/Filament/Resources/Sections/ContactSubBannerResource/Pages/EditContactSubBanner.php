<?php

namespace App\Filament\Resources\Sections\ContactSubBannerResource\Pages;

use App\Filament\Resources\Sections\ContactSubBannerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditContactSubBanner extends EditRecord
{
    protected static string $resource = ContactSubBannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
