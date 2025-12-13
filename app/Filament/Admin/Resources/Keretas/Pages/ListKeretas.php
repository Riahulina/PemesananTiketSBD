<?php

namespace App\Filament\Admin\Resources\Keretas\Pages;

use App\Filament\Admin\Resources\Keretas\KeretaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListKeretas extends ListRecords
{
    protected static string $resource = KeretaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
