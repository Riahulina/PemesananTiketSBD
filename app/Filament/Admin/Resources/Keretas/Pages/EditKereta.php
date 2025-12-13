<?php

namespace App\Filament\Admin\Resources\Keretas\Pages;

use App\Filament\Admin\Resources\Keretas\KeretaResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditKereta extends EditRecord
{
    protected static string $resource = KeretaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
