<?php

namespace App\Filament\Resources\Content\StatsResource\Pages;

use App\Filament\Resources\Content\StatsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStats extends EditRecord
{
    protected static string $resource = StatsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
