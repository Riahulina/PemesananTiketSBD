<?php

namespace App\Filament\Admin\Resources\Keretas\Schemas;

use Filament\Schemas\Schema;

// WAJIB TAMBAH INI
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;

class KeretaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')
                    ->required()
                    ->maxLength(100),

                Select::make('kelas')
                    ->options([
                        'Ekonomi' => 'Ekonomi',
                        'Bisnis' => 'Bisnis',
                        'Eksekutif' => 'Eksekutif',
                    ])
                    ->required(),

                TextInput::make('asal')->required(),

                TextInput::make('tujuan')->required(),
                
                DatePicker::make('tanggal_berangkat')
                    ->label('Tanggal Berangkat')
                    ->required()
                    ->native(false),

                TimePicker::make('jam_berangkat')->required(),

                TimePicker::make('jam_tiba')->required(),

                TextInput::make('harga')
                    ->numeric()
                    ->prefix('Rp')
                    ->required(),

                FileUpload::make('gambar')
                    ->image()
                    ->directory('kereta')
                    ->disk('public')
                    ->required(),
            ]);
    }
}
