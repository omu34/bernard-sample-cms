<?php

namespace App\Filament\Resources\Sections\HeaderNavigationResource\Pages;

use App\Filament\Resources\Sections\HeaderNavigationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHeaderNavigation extends EditRecord
{
    protected static string $resource = HeaderNavigationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
