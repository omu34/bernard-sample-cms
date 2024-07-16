<?php

namespace App\Filament\Resources\Content\BenefitResource\Pages;

use App\Filament\Resources\Content\BenefitResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBenefits extends ListRecords
{
    protected static string $resource = BenefitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
