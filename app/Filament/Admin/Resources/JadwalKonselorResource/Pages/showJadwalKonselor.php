<?php

namespace App\Filament\Admin\Resources\JadwalKonselorResource\Pages;

use App\Filament\Admin\Resources\JadwalKonselorResource;
use Filament\Resources\Pages\ViewRecord;
use Filament\Forms\Components\TextInput;
use Filament\Forms;
use Filament\Resources\Pages\Page;

class ShowJadwalKonselor extends ViewRecord
{
    protected static string $resource = JadwalKonselorResource::class;

    protected function getFormSchema(): array
    {
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
