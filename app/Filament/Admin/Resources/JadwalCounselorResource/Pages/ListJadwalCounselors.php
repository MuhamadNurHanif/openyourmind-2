<?php

namespace App\Filament\Admin\Resources\JadwalCounselorResource\Pages;

// use Filament\Actions;
// use App\Models\JadwalCounselor;
use Filament\Tables\Columns\TextColumn;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Actions\Action;
use App\Filament\Admin\Resources\JadwalCounselorResource;

class ListJadwalCounselors extends ListRecords
{
    protected static string $resource = JadwalCounselorResource::class;

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
                ->url(JadwalCounselorResource::getUrl('create')),
        ];
    }

    protected function getTableActions(): array
    {
        return [
            Action::make('view')
                ->label('Show')
                ->icon('heroicon-o-eye')
                ->url(fn($record) => route('filament.admin.resources.jadwal-konselors.show', $record))
                ->color('primary'),
        ];
    }
}
