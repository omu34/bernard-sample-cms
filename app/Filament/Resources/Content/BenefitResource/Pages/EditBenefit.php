<?php

namespace App\Filament\Resources\Content\BenefitResource\Pages;

use App\Filament\Resources\Content\BenefitResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBenefit extends EditRecord
{
    protected static string $resource = BenefitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
