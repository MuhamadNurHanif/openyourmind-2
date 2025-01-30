<?php

namespace App\Filament\Admin\Resources\LayananResource\Pages;

use Filament\Actions;
use Filament\Tables\Columns\TextColumn; // Diperbaiki: Columns (bentuk plural)
use Filament\Tables\Actions\DeleteBulkAction; // Ditambahkan
use Filament\Tables\Actions\Action; // Ditambahkan
use Filament\Resources\Pages\ListRecords;
use App\Filament\Admin\Resources\LayananResource;

class ListLayanans extends ListRecords
{
    protected static string $resource = LayananResource::class;

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('jenis_layanan')
                ->sortable()
                ->label('Jenis Layanan'),
        ];
    }

    protected function getTableBulkActions(): array
    {
        return [
            DeleteBulkAction::make(), // Diperbaiki: Menghapus prefix Tables\
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Create Layanan')
                ->color('success')
                ->url(route('filament.admin.resources.layanans.create')),
        ];
    }

    protected function getTableActions(): array
    {
        return [
            Action::make('view') // Diperbaiki: Menghapus prefix Tables\
                ->label('Show')
                ->icon('heroicon-o-eye')
                ->url(fn($record) => route('filament.admin.resources.layanans.show', $record))
                ->color('primary'),
        ];
    }
}
