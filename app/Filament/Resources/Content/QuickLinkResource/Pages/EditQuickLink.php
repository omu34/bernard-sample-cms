<?php

namespace App\Filament\Resources\Content\QuickLinkResource\Pages;

use App\Filament\Resources\Content\QuickLinkResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditQuickLink extends EditRecord
{
    protected static string $resource = QuickLinkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
