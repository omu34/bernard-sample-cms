<?php

namespace App\Filament\Resources\Sections\TestimonialsResource\Pages;

use App\Filament\Resources\Sections\TestimonialsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTestimonials extends EditRecord
{
    protected static string $resource = TestimonialsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
