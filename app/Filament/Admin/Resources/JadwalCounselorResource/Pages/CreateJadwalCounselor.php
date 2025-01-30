<?php

namespace App\Filament\Admin\Resources\JadwalCounselorResource\Pages;

use App\Filament\Admin\Resources\JadwalCounselorResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateJadwalCounselor extends CreateRecord
{
    protected static string $resource = JadwalCounselorResource::class;

    protected function getFormSchema(): array
    {
        return JadwalCounselorResource::form($this->form)->getSchema();
    }

    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl('index');
    }
}
