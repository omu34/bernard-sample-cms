<?php

namespace App\Filament\Resources\Content\ContactResource\Pages;

use App\Filament\Resources\Content\ContactResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateContact extends CreateRecord
{
    protected static string $resource = ContactResource::class;
}
