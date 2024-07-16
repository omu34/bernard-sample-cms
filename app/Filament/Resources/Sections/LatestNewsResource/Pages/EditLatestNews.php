<?php

namespace App\Filament\Resources\Sections\LatestNewsResource\Pages;

use App\Filament\Resources\Sections\LatestNewsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLatestNews extends EditRecord
{
    protected static string $resource = LatestNewsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
