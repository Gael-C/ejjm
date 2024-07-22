<?php

namespace App\Filament\Resources\JudokasResource\Pages;

use App\Filament\Resources\JudokasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJudokas extends EditRecord
{
    protected static string $resource = JudokasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
