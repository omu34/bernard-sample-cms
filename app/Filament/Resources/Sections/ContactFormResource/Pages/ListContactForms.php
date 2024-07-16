<?php

namespace App\Filament\Resources\Sections\ContactFormResource\Pages;

use App\Filament\Resources\Sections\ContactFormResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListContactForms extends ListRecords
{
    protected static string $resource = ContactFormResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
