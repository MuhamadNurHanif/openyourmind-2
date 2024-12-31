<?php

namespace App\Filament\Admin\Resources\ArtikelResource\Pages;

use App\Filament\Admin\Resources\ArtikelResource;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Pages\ViewRecord;
use Filament\Tables\Columns\TextColumn;;


class ShowArtikel extends ViewRecord
{
    protected static string $resource = ArtikelResource::class;

    protected function getViewData(): array
    {
        return [
            'judul' => $this->record->judul ?? 'No Title',
            'kategori' => $this->record->kategori ?? 'No Category',
            'tgl_published' => $this->record->tgl_published ?? 'No Date',
            'deskripsi' => $this->record->deskripsi ?? 'No Description',
            'gambar' => $this->record->gambar ?? 'No Image',
        ];
    }

    protected function view(): array
    {
        return [
            TextColumn::make('judul')->label('Judul'),
            TextColumn::make('kategori')->label('Kategori'),
            TextColumn::make('tgl_published')->label('Tanggal Terbit')->date(),
            TextColumn::make('deskripsi')->label('Deskripsi'),
            FileUpload::make('gambar')->label('Gambar')->nullable(),
        ];
    }
}
