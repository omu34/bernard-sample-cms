<?php

namespace App\Filament\Resources\Sections\LatestVideosResource\Pages;

use App\Filament\Resources\Sections\LatestVideosResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLatestVideos extends EditRecord
{
    protected static string $resource = LatestVideosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
