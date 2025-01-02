<?php

namespace App\Filament\Admin\Resources\JadwalKonselorResource\Pages;

use App\Filament\Admin\Resources\JadwalKonselorResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJadwalKonselors extends ListRecords
{
    protected static string $resource = JadwalKonselorResource::class;

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('nama_konselor')
                ->sortable()
                ->searchable()
                ->label('Nama Konselor'),
            TextColumn::make('tgl_konseling')
                ->sortable()
                ->label('Tanggal Konseling')
                ->date(),
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            \Filament\Actions\CreateAction::make()
                ->label('Create Jadwal')
                ->color('success')
                ->url(route('filament.admin.resources.jadwal-konselors.create')),
        ];
    }

    protected function getTableActions(): array
    {
        return [
            Tables\Actions\Action::make('view')
                ->label('Show')
                ->icon('heroicon-o-eye')
                ->url(fn($record) => route('filament.admin.resources.jadwal-konselors.show', $record))
                ->color('primary'),
        ];
    }
}
