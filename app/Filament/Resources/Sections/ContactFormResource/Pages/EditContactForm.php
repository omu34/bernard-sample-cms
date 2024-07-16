<?php

namespace App\Filament\Resources\Sections\ContactFormResource\Pages;

use App\Filament\Resources\Sections\ContactFormResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditContactForm extends EditRecord
{
    protected static string $resource = ContactFormResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
