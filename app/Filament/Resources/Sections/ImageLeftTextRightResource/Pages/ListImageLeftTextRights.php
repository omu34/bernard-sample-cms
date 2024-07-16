<?php

namespace App\Filament\Resources\Sections\ImageLeftTextRightResource\Pages;

use App\Filament\Resources\Sections\ImageLeftTextRightResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListImageLeftTextRights extends ListRecords
{
    protected static string $resource = ImageLeftTextRightResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
