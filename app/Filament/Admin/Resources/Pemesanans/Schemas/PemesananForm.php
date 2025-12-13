<?php

namespace App\Filament\Admin\Resources\Pemesanans\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DateTimePicker;

class PemesananForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('pelanggan.nama_pelanggan')
                ->label('Nama Pelanggan')
                ->disabled(),

            TextInput::make('kereta.nama')
                ->label('Nama Kereta')
                ->disabled(),

            DateTimePicker::make('tanggal_pemesanan')
                ->disabled(),

            TextInput::make('jadwal')
                ->disabled(),

            TextInput::make('metode_pembayaran')
                ->disabled(),

            Select::make('status_pembayaran')
                ->options([
                    'pending' => 'Pending',
                    'lunas' => 'Lunas',
                    'dibatalkan' => 'Dibatalkan',
                ])
                ->required(),
        ]);
    }
}
