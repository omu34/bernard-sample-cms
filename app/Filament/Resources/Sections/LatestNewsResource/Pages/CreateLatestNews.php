<?php

namespace App\Filament\Resources\Sections\LatestNewsResource\Pages;

use App\Filament\Resources\Sections\LatestNewsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateLatestNews extends CreateRecord
{
    protected static string $resource = LatestNewsResource::class;
}
