<?php

namespace App\Filament\Admin\Resources\Pengaduans\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class PengaduanForm
{
  public static function configure(Schema $schema): Schema
  {
    return $schema
      ->components([
        TextInput::make('user.name')
          ->disabled(),
        TextInput::make('judul')
          ->required(),
        Textarea::make('deskripsi')
          ->required()
          ->columnSpanFull(),
        TextInput::make('kategori'),
        Select::make('status')
          ->options(['diproses' => 'Diproses', 'ditanggapi' => 'Ditanggapi', 'selesai' => 'Selesai'])
          ->default('diproses')
          ->required(),
      ]);
  }
}
