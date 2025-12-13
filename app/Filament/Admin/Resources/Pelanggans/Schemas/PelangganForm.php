<?php

namespace App\Filament\Admin\Resources\Pelanggans\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;

class PelangganForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
    
                TextInput::make('email')
                    ->email()
                    ->required()
                    ->unique(ignoreRecord: true),
    
                TextInput::make('nama_pelanggan')
                    ->label('Nama Pelanggan')
                    ->required(),
    
                TextInput::make('nohp_pelanggan')
                    ->label('No. HP')
                    ->tel()
                    ->required(),
    
                Textarea::make('alamat')
                    ->required()
                    ->rows(3),
            ]);
    }
}
    