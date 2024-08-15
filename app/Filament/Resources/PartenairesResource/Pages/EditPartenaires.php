<?php

namespace App\Filament\Resources\PartenairesResource\Pages;

use App\Filament\Resources\PartenairesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPartenaires extends EditRecord
{
    protected static string $resource = PartenairesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
