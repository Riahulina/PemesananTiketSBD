<?php

namespace App\Filament\Admin\Resources\Pemesanans\Tables;

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

                // ✅ JADWAL DITAMPILKAN
                TextColumn::make('jadwal')
                    ->label('Jadwal')
                    ->wrap(), // biar ga kepanjangan satu baris

                TextColumn::make('tanggal_pemesanan')
                    ->label('Tanggal Pesan')
                    ->dateTime('d M Y H:i'),

                TextColumn::make('metode_pembayaran')
                    ->label('Metode'),

                BadgeColumn::make('status_pembayaran')
                    ->label('Status')
                    ->colors([
                        'warning' => 'pending',
                        'success' => 'lunas',
                        'danger'  => 'dibatalkan',
                    ]),
            ])
            ->defaultSort('tanggal_pemesanan', 'desc');
    }
}
