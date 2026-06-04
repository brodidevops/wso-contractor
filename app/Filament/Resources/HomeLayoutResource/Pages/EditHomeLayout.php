<?php

namespace App\Filament\Resources\HomeLayoutResource\Pages;

use App\Filament\Resources\HomeLayoutResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHomeLayout extends EditRecord
{
    protected static string $resource = HomeLayoutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
