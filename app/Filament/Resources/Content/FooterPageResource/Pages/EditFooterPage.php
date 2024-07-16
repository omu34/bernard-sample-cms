<?php

namespace App\Filament\Resources\Content\FooterPageResource\Pages;

use App\Filament\Resources\Content\FooterPageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFooterPage extends EditRecord
{
    protected static string $resource = FooterPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
