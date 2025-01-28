<?php

namespace App\Filament\Admin\Resources\LayananResource\Pages;

use App\Filament\Admin\Resources\LayananResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

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
            Tables\Actions\DeleteBulkAction::make(),
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            \Filament\Actions\CreateAction::make()
                ->label('Create Layanan')
                ->color('success')
                ->url(route('filament.admin.resources.layanans.create')),
        ];
    }

    protected function getTableActions(): array
    {
        return [
            Tables\Actions\Action::make('view')
                ->label('Show')
                ->icon('heroicon-o-eye')
                ->url(fn($record) => route('filament.admin.resources.layanans.show', $record))
                ->color('primary'),
        ];
    }
}
