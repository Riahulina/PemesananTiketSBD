<?php

namespace App\Filament\Admin\Resources\Pelanggans\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

                
class PelanggansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                
                            TextColumn::make('email')
                                ->searchable()
                                ->sortable(),
                
                            TextColumn::make('nama_pelanggan')
                                ->label('Nama')
                                ->searchable(),
                
                            TextColumn::make('nohp_pelanggan')
                                ->label('No. HP'),
                
                            TextColumn::make('alamat')
                                ->limit(30),
                        ])
                    
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
