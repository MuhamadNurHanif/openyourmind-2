<?php

namespace App\Filament\Admin\Resources\ArtikelResource\Pages;

use App\Filament\Admin\Resources\ArtikelResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class ListArtikel extends ListRecords
{
    protected static string $resource = ArtikelResource::class;

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('judul')
                ->sortable()
                ->searchable()
                ->label('Judul'),
            TextColumn::make('kategori')
                ->sortable()
                ->label('Kategori'),
            TextColumn::make('tgl_published')
                ->sortable()
                ->label('Tanggal Terbit')
                ->date(),
            TextColumn::make('deskripsi')
                ->limit(100)
                ->label('Deskripsi'),
            ImageColumn::make('Gambar')
                ->label('Gambar'),
        ];
    }

    protected function getTableFilters(): array
    {
        return [
            Tables\Filters\SelectFilter::make('kategori')
                ->options([
                    'tech' => 'Teknologi',
                    'business' => 'Bisnis',
                    'health' => 'Kesehatan',
                    'lifestyle' => 'Gaya Hidup',
                ])
                ->label('Kategori'),
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
                ->label('Create Artikel')
                ->color('success')
                ->url(route('filament.admin.resources.artikels.create')),
        ];
    }

    protected function getTableActions(): array
    {
        return [
            Tables\Actions\ViewAction::make('view')
                ->label('Show')
                ->icon('heroicon-o-pencil')
                ->color('primary')
                ->url(fn($record) => route('filament.admin.resources.artikels.show', $record)),
        ];
    }
}
