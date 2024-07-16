<?php

namespace App\Filament\Resources\Sections\ImageLeftTextRightResource\Pages;

use App\Filament\Resources\Sections\ImageLeftTextRightResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditImageLeftTextRight extends EditRecord
{
    protected static string $resource = ImageLeftTextRightResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
