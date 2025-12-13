<?php

namespace App\Filament\Admin\Resources\Keretas\Tables;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\BulkActionGroup;

class KeretasTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('gambar')->square(),

                TextColumn::make('nama')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('kelas')
                    ->sortable(),

                TextColumn::make('asal'),

                TextColumn::make('tujuan'),
                
                TextColumn::make('tanggal_berangkat')
                ->label('Tanggal')
                ->date('d M Y')
                ->sortable(),

                TextColumn::make('jam_berangkat'),

                TextColumn::make('jam_tiba'),

                TextColumn::make('harga')
                    ->money('IDR')
                    ->sortable(),
            ])

            ->filters([
                //
            ])

            ->recordActions([
                EditAction::make(),
            ])

            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
