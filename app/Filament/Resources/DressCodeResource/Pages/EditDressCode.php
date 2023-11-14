<?php

namespace App\Filament\Resources\DressCodeResource\Pages;

use App\Filament\Resources\DressCodeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDressCode extends EditRecord
{
    protected static string $resource = DressCodeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
