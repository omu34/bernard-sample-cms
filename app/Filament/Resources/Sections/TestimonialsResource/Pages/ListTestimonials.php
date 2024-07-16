<?php

namespace App\Filament\Resources\Sections\TestimonialsResource\Pages;

use App\Filament\Resources\Sections\TestimonialsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTestimonials extends ListRecords
{
    protected static string $resource = TestimonialsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
