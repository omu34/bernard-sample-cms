<?php

namespace App\Filament\Resources\Sections\OurResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\Sections\OurResource;

class CreateOurResource extends CreateRecord
{
    protected static string $resource = OurResource::class;
}
