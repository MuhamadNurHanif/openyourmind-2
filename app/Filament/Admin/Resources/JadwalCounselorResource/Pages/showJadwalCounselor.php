<?php

namespace App\Filament\Admin\Resources\JadwalCounselorResource\Pages;

use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\ViewRecord;
use App\Filament\Admin\Resources\JadwalCounselorResource;

class ShowJadwalCounselor extends ViewRecord
{
    protected static string $resource = JadwalCounselorResource::class;

    protected function getFormSchema(): array
    {
        // dd(static::$resource);
        return [
            TextInput::make('nama_konselor')
                ->label('Nama Konselor')
                ->disabled(),
            TextInput::make('tgl_konseling')
                ->label('Tanggal Konseling')
                ->disabled()
                ->formatStateUsing(fn($state) => \Carbon\Carbon::parse($state)->translatedFormat('l, d F Y')),
        ];
    }
}
