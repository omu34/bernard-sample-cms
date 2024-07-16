<?php

namespace App\Filament\Resources\Sections\ContactFormResource\Pages;

use App\Filament\Resources\Sections\ContactFormResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateContactForm extends CreateRecord
{
    protected static string $resource = ContactFormResource::class;
}
