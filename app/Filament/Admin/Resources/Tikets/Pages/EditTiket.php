<?php

namespace App\Filament\Admin\Resources\Tikets\Pages;

use App\Filament\Admin\Resources\Tikets\TiketResource;
use Filament\Resources\Pages\EditRecord;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

class EditTiket extends EditRecord
{
    protected static string $resource = TiketResource::class;

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('kode_tiket')->disabled(),

            TextInput::make('jadwal')->disabled(),

            Select::make('status_tiket')
                ->options([
                    'aktif' => 'Aktif',
                    'digunakan' => 'Digunakan',
                    'dibatalkan' => 'Dibatalkan',
                ])
                ->required(),
        ];
    }
}
