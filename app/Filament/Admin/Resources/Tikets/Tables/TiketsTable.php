<?php

namespace App\Filament\Admin\Resources\Tikets\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Support\Enums\FontWeight;

class TiketsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kode_tiket')
                    ->label('Kode Tiket')
                    ->searchable()
                    ->weight(FontWeight::Bold),

                TextColumn::make('pelanggan.nama_pelanggan')
                    ->label('Pelanggan')
                    ->searchable(),

                TextColumn::make('kereta.nama')
                    ->label('Kereta'),

                TextColumn::make('jadwal')
                    ->wrap(),

                BadgeColumn::make('status_tiket')
                    ->colors([
                        'success' => 'aktif',
                        'danger' => 'digunakan',
                        'warning' => 'dibatalkan',
                    ]),
            ])
            ->defaultSort('created_at', 'desc');
    }
}
