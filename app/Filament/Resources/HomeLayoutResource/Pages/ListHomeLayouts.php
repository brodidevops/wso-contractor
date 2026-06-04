<?php

namespace App\Filament\Resources\HomeLayoutResource\Pages;

use App\Filament\Resources\HomeLayoutResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHomeLayouts extends ListRecords
{
    protected static string $resource = HomeLayoutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
