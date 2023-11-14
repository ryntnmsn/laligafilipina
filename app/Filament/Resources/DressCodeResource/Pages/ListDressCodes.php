<?php

namespace App\Filament\Resources\DressCodeResource\Pages;

use App\Filament\Resources\DressCodeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDressCodes extends ListRecords
{
    protected static string $resource = DressCodeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
