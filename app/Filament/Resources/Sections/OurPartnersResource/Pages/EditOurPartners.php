<?php

namespace App\Filament\Resources\Sections\OurPartnersResource\Pages;

use App\Filament\Resources\Sections\OurPartnersResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOurPartners extends EditRecord
{
    protected static string $resource = OurPartnersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
