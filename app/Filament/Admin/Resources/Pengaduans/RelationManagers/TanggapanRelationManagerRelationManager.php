<?php

// namespace App\Filament\Admin\Resources\Pengaduans\RelationManagers;

// use App\Filament\Admin\Resources\Pengaduans\PengaduanResource;
// use Filament\Actions\CreateAction;
// use Filament\Resources\RelationManagers\RelationManager;
// use Filament\Tables\Table;

// class TanggapanRelationManagerRelationManager extends RelationManager
// {
//   protected static string $relationship = 'TanggapanRelationManager';

//   protected static ?string $relatedResource = PengaduanResource::class;

//   public function table(Table $table): Table
//   {
//     return $table
//       ->headerActions([
//         CreateAction::make(),
//       ]);
//   }
// }

namespace App\Filament\Admin\Resources\Pengaduans\RelationManagers;


use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Textarea;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Filament\Actions\Action;
use Filament\Actions\CreateAction;
use Filament\Support\Colors\Color;

class TanggapanRelationManager extends RelationManager
{
  protected static string $relationship = 'tanggapans';
  protected static ?string $title = 'Tanggapan Admin';

  public function form(Schema $schema): Schema
  {
    return $schema->components([
      Textarea::make('tanggapan')
        ->label('Balasan Admin')
        ->required()
        ->rows(4),
    ]);
  }

  public function table(Table $table): Table
  {
    return $table
      ->columns([
        Tables\Columns\TextColumn::make('admin.name')
          ->label('Admin'),

        Tables\Columns\TextColumn::make('tanggapan')
          ->wrap(),

        Tables\Columns\TextColumn::make('created_at')
          ->since(),
      ])
      ->headerActions([
        CreateAction::make()
          ->label('Balas Pengaduan')
          ->mutateFormDataUsing(fn(array $data) => [
            ...$data,
            'admin_id' => auth()->id(),
          ])
          ->after(
            fn($record) =>
            $record->pengaduan->update(['status' => 'ditanggapi'])
          ),
      ])
      ->actions([
        Action::make('selesai')
          ->label('Tandai Selesai')
          ->icon('heroicon-o-check-circle')
          ->color(Color::Green)
          ->requiresConfirmation()
          ->visible(
            fn() =>
            $this->getOwnerRecord()->status === 'ditanggapi'
          )
          ->action(function () {
            $this->getOwnerRecord()->update([
              'status' => 'selesai',
            ]);
          }),
      ]);
  }
}
