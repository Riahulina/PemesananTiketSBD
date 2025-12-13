<?php

namespace App\Filament\Admin\Resources\Pemesanans\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;

class PemesanansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('pelanggan.nama_pelanggan')
                    ->label('Pelanggan')
                    ->searchable(),

                TextColumn::make('kereta.nama')
                    ->label('Kereta'),

                TextColumn::make('tanggal_pemesanan')
                    ->dateTime('d M Y H:i'),

                TextColumn::make('metode_pembayaran'),

                BadgeColumn::make('status_pembayaran')
                    ->colors([
                        'warning' => 'pending',
                        'success' => 'lunas',
                        'danger' => 'dibatalkan',
                    ]),
            ])
            ->defaultSort('tanggal_pemesanan', 'desc');
    }
}
