<?php

namespace App\Filament\Resources\Sections\IntroVideoTextResource\Pages;

use App\Filament\Resources\Sections\IntroVideoTextResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIntroVideoText extends EditRecord
{
    protected static string $resource = IntroVideoTextResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
