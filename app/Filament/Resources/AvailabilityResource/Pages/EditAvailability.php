<?php

namespace App\Filament\Resources\AvailabilityResource\Pages;

use Filament\Actions\DeleteAction;
use App\Filament\Resources\AvailabilityResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAvailability extends EditRecord
{
    protected static string $resource = AvailabilityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
