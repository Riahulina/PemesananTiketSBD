<?php

namespace App\Filament\Admin\Resources\Pengaduans\Tables;

use App\Filament\Admin\Resources\Pengaduans\PengaduanResource;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PengaduansTable
{
  public static function configure(Table $table): Table
  {
    return $table
      ->columns([
        TextColumn::make('user.name')
          ->sortable(),
        TextColumn::make('judul')
          ->searchable(),
        BadgeColumn::make('status')
          ->colors([
            'warning' => 'diproses',
            'info' => 'ditanggapi',
            'success' => 'selesai',
          ]),

        TextColumn::make('status')
          ->badge(),
        TextColumn::make('created_at')
          ->dateTime()
          ->sortable()
          ->toggleable(isToggledHiddenByDefault: true),
        TextColumn::make('updated_at')
          ->dateTime()
          ->sortable()
          ->toggleable(isToggledHiddenByDefault: true),
      ])
      ->filters([
        //
      ])
      ->recordActions([
        // 
        Action::make('Klik Untuk Menanggapi')->disabled()
      ])
      // ->recordActions([])
      // ->recordUrl(fn($record) => PengaduanResource::getUrl('edit', ['record' => $record]))

      ->toolbarActions([
        BulkActionGroup::make([
          DeleteBulkAction::make(),
        ]),

      ]);
  }
}
