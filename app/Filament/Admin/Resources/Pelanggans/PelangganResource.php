<?php

namespace App\Filament\Admin\Resources\Pelanggans;

use App\Filament\Admin\Resources\Pelanggans\Pages\CreatePelanggan;
use App\Filament\Admin\Resources\Pelanggans\Pages\EditPelanggan;
use App\Filament\Admin\Resources\Pelanggans\Pages\ListPelanggans;
use App\Filament\Admin\Resources\Pelanggans\Schemas\PelangganForm;
use App\Filament\Admin\Resources\Pelanggans\Tables\PelanggansTable;
use App\Models\Pelanggan;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;

class PelangganResource extends Resource
{
    protected static ?string $model = Pelanggan::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'nama_pelanggan';

    public static function form(Schema $schema): Schema
    {
        return PelangganForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PelanggansTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPelanggans::route('/'),
            // ❌ create & edit DIHILANGKAN
        ];
    }

    // ===============================
    // 🔒 READ ONLY (ADMIN)
    // ===============================

    public static function canCreate(): bool
    {
        return false;
    }

    public static function canEdit(Model $record): bool
    {
        return false;
    }

    public static function canDelete(Model $record): bool
    {
        return false;
    }
}
