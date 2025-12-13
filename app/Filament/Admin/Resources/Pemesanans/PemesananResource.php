<?php

namespace App\Filament\Admin\Resources\Pemesanans;

use App\Models\Pemesanan;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use BackedEnum;
use Filament\Support\Icons\Heroicon;
use Illuminate\Database\Eloquent\Model;
use App\Filament\Admin\Resources\Pemesanans\Pages;
use App\Filament\Admin\Resources\Pemesanans\Schemas\PemesananForm;
use App\Filament\Admin\Resources\Pemesanans\Tables\PemesanansTable;

class PemesananResource extends Resource
{
    protected static ?string $model = Pemesanan::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedClipboardDocumentList;

    protected static ?string $navigationLabel = 'Pemesanan Tiket';

    public static function form(Schema $schema): Schema
    {
        return PemesananForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PemesanansTable::configure($table);
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function canDelete(Model $record): bool
    {
        return false;
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPemesanans::route('/'),
            'edit' => Pages\EditPemesanan::route('/{record}/edit'),
        ];
    }
}
