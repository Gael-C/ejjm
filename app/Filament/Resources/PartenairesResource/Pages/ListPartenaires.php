<?php

namespace App\Filament\Resources\PartenairesResource\Pages;

use App\Filament\Resources\PartenairesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPartenaires extends ListRecords
{
    protected static string $resource = PartenairesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
