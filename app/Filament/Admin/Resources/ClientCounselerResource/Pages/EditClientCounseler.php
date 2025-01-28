<?php

namespace App\Filament\Admin\Resources\ClientCounselerResource\Pages;

use App\Filament\Admin\Resources\ClientCounselerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditClientCounseler extends EditRecord
{
    protected static string $resource = ClientCounselerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
