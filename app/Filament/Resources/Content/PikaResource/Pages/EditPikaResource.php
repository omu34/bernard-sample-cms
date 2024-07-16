<?php

namespace App\Filament\Resources\Content\PikaResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\Content\PikaResource;

class EditPikaResource extends EditRecord
{
    protected static string $resource = PikaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
