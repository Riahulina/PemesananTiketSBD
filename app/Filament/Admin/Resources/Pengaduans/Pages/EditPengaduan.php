<?php

namespace App\Filament\Admin\Resources\Pengaduans\Pages;

use App\Filament\Admin\Resources\Pengaduans\PengaduanResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPengaduan extends EditRecord
{
  protected static string $resource = PengaduanResource::class;

  protected function getHeaderActions(): array
  {
    return [];
  }
}
