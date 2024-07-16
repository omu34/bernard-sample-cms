<?php

namespace App\Filament\Resources\Content\EventImageResource\Pages;

use App\Filament\Resources\Content\EventImageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEventImage extends EditRecord
{
    protected static string $resource = EventImageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
