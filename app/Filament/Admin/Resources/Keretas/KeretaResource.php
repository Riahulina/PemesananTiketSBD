<?php

namespace App\Filament\Admin\Resources\Keretas;

use App\Filament\Admin\Resources\Keretas\Pages\CreateKereta;
use App\Filament\Admin\Resources\Keretas\Pages\EditKereta;
use App\Filament\Admin\Resources\Keretas\Pages\ListKeretas;
use App\Filament\Admin\Resources\Keretas\Schemas\KeretaForm;
use App\Filament\Admin\Resources\Keretas\Tables\KeretasTable;
use App\Models\Kereta;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class KeretaResource extends Resource
{
    protected static ?string $model = Kereta::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Kereta';

    public static function form(Schema $schema): Schema
    {
        return KeretaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return KeretasTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListKeretas::route('/'),
            'create' => CreateKereta::route('/create'),
            'edit' => EditKereta::route('/{record}/edit'),
        ];
    }
}
