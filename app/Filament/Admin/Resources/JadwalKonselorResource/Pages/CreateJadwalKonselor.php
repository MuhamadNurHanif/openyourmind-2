<?php

namespace App\Filament\Admin\Resources\JadwalKonselorResource\Pages;

use App\Filament\Admin\Resources\JadwalKonselorResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateJadwalKonselor extends CreateRecord
{
    protected static string $resource = JadwalKonselorResource::class;

    protected function getFormSchema(): array
    {
        return JadwalKonselorResource::form($this->form)->getSchema();
    }

    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl('index');
    }
}
