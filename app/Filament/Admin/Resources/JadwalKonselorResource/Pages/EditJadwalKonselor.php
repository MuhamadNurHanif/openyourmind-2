<?php

namespace App\Filament\Admin\Resources\JadwalKonselorResource\Pages;

use App\Filament\Admin\Resources\JadwalKonselorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJadwalKonselor extends EditRecord
{
    protected static string $resource = JadwalKonselorResource::class;

    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl('index');
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $data['tgl_konseling'] = \Carbon\Carbon::parse($data['tgl_konseling'])->format('Y-m-d');
        return $data;
    }
}
